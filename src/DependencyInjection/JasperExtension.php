<?php

namespace Simplisti\Bundle\JasperBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

use Simplisti\Bundle\JasperBundle\Reporter\JasperService;

class JasperExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        // https://symfony.com/doc/current/bundles/configuration.html
        $service = $container->getDefinition(JasperService::class);

        $service->setArgument('$binaryPath', $config['binary']);
        $service->setArgument('$templatePaths', $config['paths']);
    }

}
