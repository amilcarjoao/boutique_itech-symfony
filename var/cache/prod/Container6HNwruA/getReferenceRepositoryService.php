<?php

namespace Container6HNwruA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReferenceRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ReferenceRepository' shared autowired service.
     *
     * @return \App\Repository\ReferenceRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ReferenceRepository'] = new \App\Repository\ReferenceRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}