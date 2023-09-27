<?php

/**
 * PHP API usage example
 *
 * contributed by: Art of WiFi
 * description:    example basic PHP script to create a set of vouchers, returns an array containing the newly created vouchers
 */

/**
 * using the composer autoloader
 */

//require_once 'vendor/autoload.php';

require_once '/var/www/html/api/vendor/autoload.php';

/**
 * include the config file (place your credentials etc. there if not already present)
 * see the config.template.php file for an example
 */
require_once 'config.php';

/**
 * minutes the voucher is valid after activation (expiration time)
 */
//$voucher_expiration = 60;

$voucher_expiration = $_POST["exp"];

/**
 * the number of vouchers to create
 */
//$voucher_count = 1;

$voucher_count = $_POST["quantity"];

/**
 * The site where you want to create the voucher(s)
 */
$site_id = 'default';

/**
 * initialize the UniFi API connection class and log in to the controller
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();

/**
 * then we create the required number of vouchers with the requested expiration value
 */
$voucher_result = $unifi_connection->create_voucher($voucher_expiration, $voucher_count);

/**
 * we then fetch the newly created vouchers by the create_time returned
 */
//$vouchers = $unifi_connection->stat_voucher($voucher_result[0]->create_time);

$vouchers = $unifi_connection->stat_voucher();

/**
 * provide feedback (the newly created vouchers) in json format
 */

 //$a = json_encode($vouchers, JSON_PRETTY_PRINT);

 

 //print_r($vouchers);

//print_r(array_values($vouchers));


// foreach($vouchers as $valor)
// {
//     // echo $cur->code;
//     // echo '|';
//     $resultado["code"] = $valor->code;
//     $resultado["duration"] = $valor->duration;
//     echo $resultado["code"];
//     echo '|';
// }


// $resultado["create_time"] = $vouchers[0]->create_time;
// $resultado["code"] = $vouchers[0]->code;
// $resultado["duration"] = $vouchers[0]->duration;

//print_r($resultado);


require_once('modelo.php');
