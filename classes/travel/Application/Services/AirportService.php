<?php

namespace Travel\Application\Services;

use Travel\Domain\Interfaces\AirportRepositoryInterface;

class AirportService
{
    private $airportRepository;

    public function __construct(AirportRepositoryInterface $airportRepository)
    {
        $this->airportRepository = $airportRepository;
    }

    public function searchAirports(string $criteria): array
    {
        return ($this->airportRepository)($criteria);
    }
}
