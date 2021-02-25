<?php

use Rector\Core\Configuration\Option;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set(Option::PATHS, [
        __DIR__ . '/src',
    ]);

    $services = $containerConfigurator->services();
    $services->set(\Rector\CodeQuality\Rector\ClassMethod\DateTimeToDateTimeInterfaceRector::class);
};
