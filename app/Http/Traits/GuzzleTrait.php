<?php
namespace App\Http\Traits;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\App;
use phpDocumentor\Reflection\DocBlock\Tags\Method;
use phpDocumentor\Reflection\DocBlock\Tags\Param;

trait GuzzleTrait {

    public function response($message, $status=0) {
        return [
            'response' => $status,
            'message' => $message
        ];
    }
    public function sendGuzzleRequest($endpoint, $param=array(), $method='get') {
        if(!$endpoint){
            $message = 'The parameter URL is missing';
            return $this->response($message);
        }
        if(!is_array($param)){
            $message = 'Form parameter must be array';
            return $this->response($message);
        }
        $method = trim(strtoupper($method));
        $endpoint = trim($endpoint);
        $baseUrl = (App::environment() === 'local')
            ? env("API_LOCAL_URL", 'http://127.0.0.1:8000/api/')
            : env("API_PROD_URL", 'http://api.guidance.pet/api/');
        $config = [
            'base_uri' => $baseUrl,
            'headers' => [
                'Authorization' => 'Bearer ' , // add token if required
                'Accept' => 'application/json',
                'Access-Control-Allow-Origin' => '*',
                'Access-Control-Allow-Header' => 'Authorization',
                'Content-Type' => 'application/json',
                ]
        ];
        $params = [
            'form_params' => $param
        ];
        $client = new Client($config);
        try {
            $result = $client->request($method, $endpoint, $params);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody()->getContents();
        }
        return $result;
    }
}
