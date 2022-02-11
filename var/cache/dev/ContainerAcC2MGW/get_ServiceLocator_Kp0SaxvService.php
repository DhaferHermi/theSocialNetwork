<?php

namespace ContainerAcC2MGW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kp0SaxvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kp0Saxv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kp0Saxv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'group' => ['privates', '.errored..service_locator.kp0Saxv.App\\Entity\\Group', NULL, 'Cannot autowire service ".service_locator.kp0Saxv": it references class "App\\Entity\\Group" but no such service exists.'],
            'request' => ['privates', '.errored._xK348H', NULL, 'Cannot determine controller argument for "App\\Controller\\HomeController::delete()": the $request argument is type-hinted with the non-existent class or interface: "App\\Http\\Requests\\Request".'],
        ], [
            'group' => 'App\\Entity\\Group',
            'request' => '?',
        ]);
    }
}
