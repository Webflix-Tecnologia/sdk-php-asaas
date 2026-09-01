<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../vendor/autoload.php";

$asaasApiCliente = new \Asaas\Cliente([
    'base_uri' => \Asaas\Core\AsaasHttp::BASE_URL_TESTE,
]);

$asaasApiCliente->setToken('');

try{
    
    $asaasApiClienteResponse = $asaasApiCliente->listar([

    ]);
    
    Asaas\Helper\AsaasHelper::dump($asaasApiClienteResponse);
    
} catch (Telcom\Exceptions\TelcomException $ex) {

    Asaas\Helper\AsaasHelper::dump($ex);
    
}

