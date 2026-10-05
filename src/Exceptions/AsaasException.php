<?php

namespace Asaas\Exceptions;

use Exception;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;

class AsaasException extends Exception{
    
    public function __construct(Exception $ex) {
        $message = $ex->getMessage() . ' <> ' . $ex->getTraceAsString();        
        parent::__construct($message, $ex->getCode(), $ex->getPrevious());
    }
    
    public static function fromObjectMessage($message, $code, $previous = null){
        
        if(is_array($message)){
            
            $newMessageString = [];
            
            foreach($message as $error){
                $newMessageString[] =  $error;
            }                           
            
            return new AsaasException( new Exception(implode("\n", $newMessageString), $code, $previous) );     
        }
        
        if(is_string($message)){
            
            return new AsaasException( new Exception($message, $code, $previous) );     
            
        }
        
    }
    
    public static function fromGuzzleException($ex){
        $className = get_class($ex);
        $responseBody = '['.$className.'] Body: ' . (string)$ex->getResponse()->getBody(); 
        return new AsaasException( new Exception($responseBody, $ex->getCode(), $ex->getPrevious()) );
    }
    
}
