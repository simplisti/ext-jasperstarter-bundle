<?php

namespace Simplisti\Bundle\JasperBundle\Reporter;

// NOTE:
// We need a couple services
// jasper.reporter.database  - use the DB_URL
// jasper.reporter.generic - no parameters by default other than those configured in service definition (ie: locale, etc)


// NOTE: Read this link to create a service not dependent on AbstractController
// https://stackoverflow.com/a/57754175/897075

use Simplisti\Lib\JasperStarter\Reporter;

class JasperService
{
    // https://symfony.com/doc/current/configuration.html#accessing-configuration-parameters
    public function __construct(string $env, string $binaryPath, array $templatePaths)
    {
        $this->reporter = new Reporter($binaryPath);

        if ('dev' === $env) {
            // TODO: Compile all templates under all registered template paths
        }

    }

    public function report (string $sourceFile, array $parameters = [])
    {

    }

}