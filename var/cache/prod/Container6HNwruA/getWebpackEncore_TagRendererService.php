<?php

namespace Container6HNwruA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebpackEncore_TagRendererService extends App_KernelProdContainer
{
    /*
     * Gets the private 'webpack_encore.tag_renderer' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\Asset\TagRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['webpack_encore.tag_renderer'] = new \Symfony\WebpackEncoreBundle\Asset\TagRenderer(($container->privates['webpack_encore.entrypoint_lookup_collection'] ?? $container->load('getWebpackEncore_EntrypointLookupCollectionService')), ($container->privates['assets.packages'] ?? $container->load('getAssets_PackagesService')), [], ['defer' => true], [], ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
