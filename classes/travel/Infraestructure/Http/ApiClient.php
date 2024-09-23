<?php

namespace Travel\Infraestructure\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

abstract class ApiClient
{
    protected $client;
    protected $token;
    protected $userName;
    protected $userPassword;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.airtimeconnect.com/', // BASE URL
        ]);
        $this->token = '026EEE7A47CD8CAFE39FAAC1CA90526E';
        $this->userName = 'api_sandbox';
        $this->userPassword = 'aB3#dE5!';
    }

    // Método genérico para realizar una solicitud POST
    public function sendRequest(string $method, string $endpoint, array $data): array
    {
        try {
            $response = $this->client->request($method, $endpoint, [
                'headers' => [
                    'Token' => $this->token,
                    'User-Name' => $this->userName,
                    'User-Password' => $this->userPassword,
                ],
                'json' => ['data' => $data],
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $errorBody = $e->getResponse()->getBody()->getContents();
                throw new \Exception("Error de cliente: " . $e->getResponse()->getStatusCode() . " - " . $errorBody);
            } else {
                throw new \Exception("Error en la solicitud: " . $e->getMessage());
            }
        }
    }

}
