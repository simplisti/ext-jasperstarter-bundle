<?php

namespace Simplisti\Bundle\JasperBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * https://symfony.com/doc/current/components/config/definition.html
     *
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('jasper');
        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('binary')->defaultValue('')->end()
                ->arrayNode('paths')
                    ->isRequired()->requiresAtLeastOneElement()->scalarPrototype()->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }

}
