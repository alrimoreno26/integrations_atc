<?php

namespace Travel\Domain\Interfaces;

use Travel\Domain\DTOs\FlightPricesDTO;

interface FlightSearchDatesPricesRepositoryInterface
{
    /**
     * Fetches flight prices based on the given parameters.
     *
     * @param int $organizationId The ID of the organization
     * @param string $dateFrom The start date of the search range
     * @param string $dateTo The end date of the search range
     * @param int $flightType The type of flight (1 for one-way, 2 for round trip)
     * @param int $adults The number of adult passengers
     * @param int $infants The number of infant passengers
     * @param int $childs The number of child passengers
     * @param string $departureCity The departure city
     * @param string $destinationCity The destination city
     * @param string $returnToCity The return flight destination city (if flightType is 2)
     * @param string $returnFromCity The return flight departure city (if flightType is 2)
     * @param int $intervalDeparture The interval in minutes between the departure flights
     * @param int $intervalReturn The interval in minutes between the return flights (if flightType is 2)
     *
     * @return FlightPricesDTO         The data transfer object containing the flight prices information
     */
    public function __invoke(
        string $dateFrom,
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
        int    $intervalReturn
    ): array;
}
