<?php

namespace ContainerM5EDpmb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_PasswordHasherFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.password_hasher_factory' shared service.
     *
     * @return \Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/password-hasher/Hasher/PasswordHasherFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/password-hasher/Hasher/PasswordHasherFactory.php';

        return $container->privates['security.password_hasher_factory'] = new \Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory(['Symfony\\Component\\Security\\Core\\User\\PasswordAuthenticatedUserInterface' => ['algorithm' => 'auto', 'migrate_from' => [], 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'cost' => NULL, 'memory_cost' => NULL, 'time_cost' => NULL]]);
    }
}
