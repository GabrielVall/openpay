<?php
require_once '../vendor/autoload.php';
use Openpay\Data\Openpay;
$openpay = Openpay::getInstance('msrmt2amtq1l2fw1yp9z','sk_9c1c99899c404936a532d9cfb5174ea1','MX');

$customer = array(
     'name' => 'Juan',
     'last_name' => 'Vazquez Juarez',
     'phone_number' => '4423456723',
     'email' => 'juan.vazquez@empresa.com.mx');

$chargeRequest = array(
    'method' => 'card',
    'source_id' => $_POST['id'],
    'amount' => 100,
    'currency' => 'MXN',
    'description' => 'Cargo inicial a mi merchant',
    'order_id' => 'test21393218973217',
    'device_session_id' => $_POST['deviceSessionId'],
    'customer' => $customer);

$charge = $openpay->charges->create($chargeRequest);