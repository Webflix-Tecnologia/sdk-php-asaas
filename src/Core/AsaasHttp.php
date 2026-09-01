<?php

namespace Asaas\Core;

use GuzzleHttp\Client;

class AsaasHttp {
    protected Client $http;
    protected $config;
    
    const BASE_URL = 'https://api.asaas.com/';
    const BASE_URL_TESTE = 'https://api-sandbox.asaas.com/';
           
    public function __construct(array $config = []) {    
        
        $defaultConfig = array(
            'base_uri' => self::BASE_URL,
            'timeout' => 30,
            'headers' => array(
                'content-type' => 'application/json',
                'user-agent' => 'SDK PHP Webflix'
            )
        );
        
        $this->config = array_merge($defaultConfig, $config);
                
        $this->http = new Client($this->config);
    }
}
