<?php

namespace Asaas;

use Asaas\Core\AsaasController;
use Asaas\Exceptions\AsaasException;
use Exception;
use GuzzleHttp\Exception\RequestException;

class CartaoCredito extends AsaasController{
    
    public function tokenizar(array $data){        
        try{
            $response = $this->http->post('v3/creditCard/tokenizeCreditCard', [
                "headers" => [
                    'access_token' => $this->getToken(),
                ],
                "json" => $data,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw AsaasException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new AsaasException($ex);
        }
    }
    
}
