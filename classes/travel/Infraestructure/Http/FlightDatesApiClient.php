<?php

namespace Travel\Infraestructure\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Travel\Domain\Interfaces\FlightDatesRepositoryInterface;
use Travel\Infraestructure\Mappers\FlightDatesMapper;
use Travel\Domain\DTOs\FlightDatesDTO;

class FlightDatesApiClient extends ApiClient implements FlightDatesRepositoryInterface
{

    public function __invoke(string $departureCity, string $destinationCity, bool $oneWayAirline, bool $isMultiCity): FlightDatesDTO
    {
        try {
            $data = [
                'organization_id' => 31560,
                'departure_city' => $departureCity,
                'destination_city' => $destinationCity,
                'oneWayAirline' => $oneWayAirline,
                'is_multi_city' => $isMultiCity,
            ];

            $response = $this->sendRequest('post', 'flights/get_airports', $data);

            return FlightDatesMapper::mapFromApiResponse($response);
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
