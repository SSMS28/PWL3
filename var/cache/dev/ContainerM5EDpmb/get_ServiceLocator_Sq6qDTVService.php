<?php

namespace ContainerM5EDpmb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Sq6qDTVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Sq6qDTV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Sq6qDTV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'post' => ['privates', '.errored..service_locator.Sq6qDTV.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.Sq6qDTV": it needs an instance of "App\\Entity\\Post" but this type has been excluded in "config/services.yaml".'],
        ], [
            'doctrine' => '?',
            'post' => 'App\\Entity\\Post',
        ]);
    }
}
