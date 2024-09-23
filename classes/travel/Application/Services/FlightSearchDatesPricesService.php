<?php

namespace Travel\Application\Services;

use Travel\Domain\DTOs\FlightPricesDTO;
use Travel\Domain\Interfaces\FlightSearchDatesPricesRepositoryInterface;

class FlightSearchDatesPricesService
{
    private $flightSearchDatePrice;

    public function __construct(FlightSearchDatesPricesRepositoryInterface $flightSearchDatesPricesRepository)
    {
        $this->flightSearchDatePrice = $flightSearchDatesPricesRepository;
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
                                     int    $intervalReturn): FlightPricesDTO
    {
        return ($this->flightSearchDatePrice)(
            $dateFrom,
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
            $intervalReturn
        );
    }
}
