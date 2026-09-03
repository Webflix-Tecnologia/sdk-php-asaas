<?php

namespace Asaas;

use Asaas\Core\AsaasController;
use Asaas\Exceptions\AsaasException;
use Exception;
use GuzzleHttp\Exception\RequestException;

class Cliente extends AsaasController{
    
    public function criar(array $data){        
        try{
            $response = $this->http->post('v3/customers', [
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
    
    public function atualizarCriar($cpfCnpj, array $data){        
        $listarClientes = $this->listar([
            'cpfCnpj' => $cpfCnpj
        ]);

        if($listarClientes && $listarClientes->totalCount > 0){
            $cliente = $listarClientes->data[0];
            return $this->atualizar($cliente->id, $data);
        }

        return $this->criar($data);
    }
    
    public function listar(array $query = []){
        try{
            $response = $this->http->get('v3/customers', [
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
    
    public function detalhes($id){        
        try{
            $response = $this->http->get(vsprintf('v3/customers/%s', [
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
    
    public function atualizar($id, array $data){        
        try{
            $response = $this->http->put(vsprintf('v3/customers/%s', [
                $id
            ]), [
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
