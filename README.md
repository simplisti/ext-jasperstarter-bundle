Tell the world :) 

- Implement Symfony bundle
 - Set template source path, compile path,


 - Capture and display/log errors and output
 - Implement a service decorator
   - on instantiation of the object compile all templates when APP_ENV=dev
 - Implement services parameter via OptionDbAggregate()

  - Implement ReporterControllerTrait::report()

   function someAction (Reporter $reporter) {
      $outputFile = '';
      $reporter->report('tpl/report.jrxml', $outputFile, $this->get('reporter.db'));

      // Alternaitvely we could use a ReporterController which implements the report() method
      // and simplifies the code required to generate PDF's
      // Custom Response that sets mime-type, fetches file, return file
      $this->report('tpl/report.jrxml', ['WORKORDER_ID' => 42344], 'workorder-42344.pdf');
   }

   // Example of dynamic form
   function someAction ()
   {
        $jrxml = $this->render('dynamic.jrxml.twig', ['columns' => $columns]);
        file_put_contents('/tmp/RANDOM-FILE.jrxml', $jrxml);

        $this->report('/tmp/RANDOM-FILE.jrxml', ['WORKORDER_ID' => 267347]);
   }
