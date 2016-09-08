<?php
     //$options = array('location' => 'http://portaisdevel/server.php', 
     $options = array('location' => 'http://10.100.0.46/CodeIgniter-3.0.6/index.php/server?teste=1234',
                   'uri' => 'http://10.100.0.46/');
     //create an instante of the SOAPClient (the API will be available)
     $api = new SoapClient(NULL, $options);
     //call an API method
     //echo $api->index();
//     echo $api->hello();
     echo $api->param();
 ?>
