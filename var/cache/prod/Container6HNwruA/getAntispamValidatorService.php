<?php

namespace Container6HNwruA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAntispamValidatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Validator\AntispamValidator' shared autowired service.
     *
     * @return \App\Validator\AntispamValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Validator\\AntispamValidator'] = new \App\Validator\AntispamValidator();
    }
}
