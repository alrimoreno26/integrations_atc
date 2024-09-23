<?php

namespace Travel\Application\Services;

use Travel\Domain\DTOs\FlightDatesDTO;
use Travel\Domain\Interfaces\FlightDatesRepositoryInterface;

class FlightDatesService
{

    private $flightDates;

    public function __construct(FlightDatesRepositoryInterface $flightDatesRepository)
    {
        $this->flightDates = $flightDatesRepository;
    }

    public function searchFlightDates(string $departureCity, string $destinationCity, bool $oneWayAirline, bool $isMultiCity): FlightDatesDTO
    {
        return ($this->flightDates)($departureCity, $destinationCity, $oneWayAirline, $isMultiCity);
    }
}
