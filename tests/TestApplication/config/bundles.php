<?php

declare(strict_types=1);

$bundles = require dirname(__DIR__, 3) . '/vendor/sylius/test-application/config/bundles.php';

$pluginBundles = [
    Setono\DoctrineORMBatcherBundle\SetonoDoctrineORMBatcherBundle::class => ['all' => true],
    Setono\SyliusFeedPlugin\SetonoSyliusFeedPlugin::class => ['all' => true],
];

$result = [];
foreach ($bundles as $class => $envs) {
    if (Sylius\Bundle\GridBundle\SyliusGridBundle::class === $class) {
        $result += $pluginBundles;
    }
    $result[$class] = $envs;
}

return $result + $pluginBundles;
