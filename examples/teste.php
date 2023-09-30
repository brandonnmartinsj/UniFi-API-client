<?php
/**
 * load the class using the composer autoloader
 */





require_once 'vendor/autoload.php';



$controlleruser     = 'api'; // the user name for access to the UniFi Controller
$controllerpassword = 'Info.pma.200'; // the password for access to the UniFi Controller
$controllerurl      = 'https://192.168.1.240:8443'; // full url to the UniFi Controller, eg. 'https://22.22.11.11:8443', for UniFi OS-based
                          // controllers a port suffix isn't required, no trailing slashes should be added
$controllerversion  = '7.5.176'; // the version of the Controller software, e.g. '4.6.6' (must be at least 4.0.0)
$siteid		    = '5d011ed6b16103051b376004'

/**
 * set to true (without quotes) to enable debug output to the browser and the PHP error log
 */



/**
 * initialize the UniFi API connection class, log in to the controller and request the alarms collection
 * (this example assumes you have already assigned the correct values to the variables used)
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $siteid, $controllerversion, true);
$login            = $unifi_connection->login();
$results          = $unifi_connection->list_alarms(); // returns a PHP array containing alarm objects
?>
