<?php

namespace Travel\Infraestructure\Http;


use GuzzleHttp\Exception\RequestException;
use Travel\Domain\Interfaces\AirportRepositoryInterface;
use GuzzleHttp\Client;
use Travel\Infraestructure\Mappers\AirportMapper;

class AirportApiClient extends ApiClient implements AirportRepositoryInterface
{
    /**
     *
     * @param string|null $criteria
     * @return array
     */
    public function __invoke(string $criteria): array
    {
        try {
            $data = [
                'organization_id' => 31560, //TODO Cambia este valor
                'criteria' => $criteria,
            ];

            $response = $this->sendRequest('post', 'flights/get_airports', $data);

            return AirportMapper::mapFromApiResponse($response);
        } catch (RequestException $e) {
            // Captura los errores de la solicitud y devuelve el mensaje de error
            if ($e->hasResponse()) {
                $errorBody = $e->getResponse()->getBody()->getContents();
                throw new \Exception("Error de cliente: " . $e->getResponse()->getStatusCode() . " - " . $errorBody);
            } else {
                throw new \Exception("Error en la solicitud: " . $e->getMessage());
            }
        } catch (\Exception $e) {
            throw new \Exception("Ocurrio un error inesperado: " . $e->getMessage());
        }

    }


}
