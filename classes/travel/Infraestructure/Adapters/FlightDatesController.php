<?php

namespace Travel\Infraestructure\Adapters;

use Travel\Application\Services\FlightDatesService;

class FlightDatesController
{
    private $flightDates;

    public function __construct(FlightDatesService $flightDatesService)
    {
        $this->flightDates = $flightDatesService;
    }

    public function flightDates(string $departureCity, string $destinationCity, bool $oneWayAirline, bool $isMultiCity)
    {
        try {
            $result = $this->flightDates->searchFlightDates($departureCity, $destinationCity, $oneWayAirline, $isMultiCity);
            return json_encode(['status' => 'OK', 'response' => $result]);
        } catch (\Exception $e) {
            return json_encode(['status' => 'ERROR', 'message' => $e->getMessage()]);
        }
    }
}
