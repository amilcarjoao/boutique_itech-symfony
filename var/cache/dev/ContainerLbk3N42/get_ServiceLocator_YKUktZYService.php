<?php

namespace ContainerLbk3N42;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YKUktZYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yKUktZY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yKUktZY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'request' => ['privates', '.errored.ds2g4ZC', NULL, 'Cannot determine controller argument for "App\\Controller\\TestController::hello()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Reuest". Did you forget to add a use statement?'],
        ], [
            'request' => '?',
        ]);
    }
}
