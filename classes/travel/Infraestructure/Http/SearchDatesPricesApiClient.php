<?php

namespace Travel\Infraestructure\Http;

use GuzzleHttp\Exception\RequestException;
use Travel\Domain\Interfaces\FlightSearchDatesPricesRepositoryInterface;
use Travel\Infraestructure\Mappers\FlightDatesPricesMapper;
use Travel\Domain\DTOs\FlightPricesDTO;

class SearchDatesPricesApiClient extends ApiClient implements FlightSearchDatesPricesRepositoryInterface
{
    public function __invoke(string $dateFrom,
                             string $dateTo,
                             int    $flightType,
                             int    $adults,
                             int    $infants,
                             int    $childs,
                             string $departureCity,
                             string $destinationCity,
                             string $returnToCity,
                             string $returnFromCity,
                             int    $intervalDeparture,
                             int    $intervalReturn): array
    {
        try{
            $data = [
                'organization_id' => 31560,
                'date_from' => $dateFrom,
                'date_to' => $dateTo,
                'flight_type' => $flightType,
                'adults' => $adults,
                'infants' => $infants,
                'childs' => $childs,
                'departure_City' => $departureCity,
                'destination_city' => $destinationCity,
                'return_to_city' => $returnToCity,
                'return_from_city' => $returnFromCity,
                'interval_departure' => $intervalDeparture,
                'interval_return' => $intervalReturn,
            ];

            return $this->sendRequest('post', 'flights/get_flight_prices_calendar', $data);

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
