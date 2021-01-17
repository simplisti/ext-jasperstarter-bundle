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
    //public function __construct(string $env, Reporter $reporter, array $templatePaths)
    public function __construct(string $env, array $templatePaths = [])
    {
        // TODO: Pass in from config parameter (which is determined at composer install hook)
        $this->reporter = new Reporter('/opt/jasperstarter/bin/jasperstarter');

        if ('dev' === $env) {
            // TODO: Compile all templates under all registered template paths

        }
    }

    public function report (string $sourceFile, array $parameters = [])
    {

    }

}