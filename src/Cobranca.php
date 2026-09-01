<?php

namespace Asaas;

use Asaas\Core\AsaasController;
use Asaas\Exceptions\AsaasException;
use Exception;
use GuzzleHttp\Exception\RequestException;

class Cobranca extends AsaasController{
    
    public function criar(array $data){        
        try{
            $response = $this->http->post('v3/payments', [
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
    
    public function capturar($id){        
        try{
            $response = $this->http->post(vsprintf('v3/payments/%s/captureAuthorizedPayment', [
                $id
            ]), [
                "headers" => [
                    'access_token' => $this->getToken(),
                ],
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw AsaasException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new AsaasException($ex);
        }
    }
    
    public function detalhes($id){        
        try{
            $response = $this->http->get(vsprintf('v3/payments/%s', [
                $id
            ]), [
                "headers" => [
                    'access_token' => $this->getToken(),
                ],
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw AsaasException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new AsaasException($ex);
        }
    }
    
    public function detalhesPagamento($id){        
        try{
            $response = $this->http->get(vsprintf('v3/payments/%s/billingInfo', [
                $id
            ]), [
                "headers" => [
                    'access_token' => $this->getToken(),
                ],
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw AsaasException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new AsaasException($ex);
        }
    }
    
    public function detalhesVisualizacao($id){        
        try{
            $response = $this->http->get(vsprintf('v3/payments/%s/viewingInfo', [
                $id
            ]), [
                "headers" => [
                    'access_token' => $this->getToken(),
                ],
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw AsaasException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new AsaasException($ex);
        }
    }
    
    public function status($id){        
        try{
            $response = $this->http->get(vsprintf('v3/payments/%s/status', [
                $id
            ]), [
                "headers" => [
                    'access_token' => $this->getToken(),
                ],
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw AsaasException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new AsaasException($ex);
        }
    }
    
    public function qrcodePix($id){        
        try{
            $response = $this->http->get(vsprintf('v3/payments/%s/pixQrCode', [
                $id
            ]), [
                "headers" => [
                    'access_token' => $this->getToken(),
                ],
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw AsaasException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new AsaasException($ex);
        }
    }
    
    public function detalhesBoleto($id){        
        try{
            $response = $this->http->get(vsprintf('v3/payments/%s/identificationField', [
                $id
            ]), [
                "headers" => [
                    'access_token' => $this->getToken(),
                ],
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (RequestException $ex) {
            
            throw AsaasException::fromGuzzleException($ex);
                        
        } catch (Exception $ex) {
            throw new AsaasException($ex);
        }
    }
    
    public function listar(array $query = []){        
        try{
            $response = $this->http->get('v3/payments', [
                "headers" => [
                    'access_token' => $this->getToken(),
                ],
                "query" => $query,
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
