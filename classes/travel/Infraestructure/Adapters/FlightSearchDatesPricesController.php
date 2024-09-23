<?php

namespace Travel\Infraestructure\Adapters;

use Travel\Application\Services\FlightSearchDatesPricesService;

class FlightSearchDatesPricesController
{
    private $flightDatesPrices;

    public function __construct(FlightSearchDatesPricesService $flightDatesPricesService)
    {
        $this->flightDatesPrices = $flightDatesPricesService;
    }

    public function searchDatePrice(string $dateFrom,
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
                                    int    $intervalReturn)
    {
        try {
            $result = $this->flightDatesPrices->searchDatePrice($dateFrom,
                $dateTo,
                $flightType,
                $adults,
                $infants,
                $childs,
                $departureCity,
                $destinationCity,
                $returnToCity,
                $returnFromCity,
                $intervalDeparture,
                $intervalReturn);
            return json_encode(['status' => 'OK', 'response' => $result]);
        } catch (\Exception $e) {
            return json_encode(['status' => 'ERROR', 'message' => $e->getMessage()]);
        }
    }
}
