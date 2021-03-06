<?php

$parametersFilepath = __DIR__  . '/parameters.php';
if (!file_exists($parametersFilepath)) 
    return;

$parameters = require($parametersFilepath);

if (!array_key_exists('parameters', $parameters)) {
    throw new \Exception('Missing "parameters" key in "parameters.php" configuration file');
}

foreach ($parameters['parameters'] as $key => $value) {
    $container->setParameter($key, $value);
}