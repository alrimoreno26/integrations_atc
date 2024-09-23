<?php

namespace Travel\Domain\Interfaces;

use Travel\Domain\DTOs\FlightDatesDTO;

interface FlightDatesRepositoryInterface
{
    /**
     * Retrieves flights based on the given parameters.
     *
     * @param string $departureCity The city of departure.
     * @param string $destinationCity The destination city.
     * @param bool $oneWayAirline Flag indicating if the airline provides one-way flights only.
     * @param bool $isMultiCity Flag indicating if the search is for multi-city flights.
     *
     * @return FlightDatesDTO Containing the retrieved flights.
     */
    public function __invoke(string $departureCity, string $destinationCity, bool $oneWayAirline, bool $isMultiCity): FlightDatesDTO;
}


