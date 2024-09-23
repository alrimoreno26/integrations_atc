<?php

namespace Travel\Domain\Interfaces;

use Travel\Domain\DTOs\AirportDTO;

interface AirportRepositoryInterface
{
    /**
     * Retrieves airports based on the given parameters.
     *
     * @param string|null $criteria
     * @return AirportDTO[]
     */
    public function __invoke(string $criteria): array;
}
