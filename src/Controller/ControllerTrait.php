<?php

namespace Simplisti\Bundle\JasperBundle\Controller;

trait ControllerTrait
{
    public static function getSubscribedServices()
    {
        return array_merge(
            parent::getSubscribedServices(),
            [
                'jasper.service' => \Simplisti\Bundle\JasperBundle\Reporter\JasperService::class
            ]
        );
    }

    public function report(string $sourceFile, array $parameters = [], ?string $dispositionName = null)
    {
        $jasper = $this->container->get('jasper.service');

        // TODO: Instantiate the response object in here, set disposition values

        dump($jasper);
    }

}