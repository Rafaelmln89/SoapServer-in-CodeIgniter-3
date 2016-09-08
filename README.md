# SoapServer-in-CodeIgniter-3
==================================================

What is?
--------------------------------------

This a a simple example to make a comunication with diferents servers; 
This project is an example to use SoapServer in Codeigniter 3

*SoapServer: PHP class provides a server for the » SOAP 1.1 and » SOAP 1.2 protocols. It can be used with or without a WSDL service description.
*CodeIgniter: A powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.

How to use
----------------------------

First create a Function.php file in controller path in CodeIgniter 3; and create your server's functions:

```
//Example
function hello()
{
  return 'Hello Word';
}
```

Secund create a Server.php file in controller path in CodeIgniter 3; and set the options in index function:

```
//when in non-wsdl mode the uri option must be specified
$options = array('uri'=>'http://<serverurl>/', 'encoding' => 'UTF-8');
//create a new SOAP server
$server = new SoapServer(NULL, $options);
//attach the API class to the SOAP Server
$server->setClass('Welcome');
//start the SOAP requests handler
$server->handle();
```

Last, create a client.php file on other server, to use server functions:
```php
<?php
  //Define the URL to call the file Server.php on CodeIgniter 3
  $options = array('location' => 'http://<serverurl>/CodeIgniter-3.0.6/index.php/server',
                   'uri' => 'http://<serverurl>/');
  
  //create an instante of the SOAPClient
  $api = new SoapClient(NULL, $options);
  
  //call an method on Function.php file
  echo $api->hello();
?>
```

