<?php

namespace Container6HNwruA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDistributeurTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\DistributeurType' shared autowired service.
     *
     * @return \App\Form\DistributeurType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\DistributeurType'] = new \App\Form\DistributeurType();
    }
}
