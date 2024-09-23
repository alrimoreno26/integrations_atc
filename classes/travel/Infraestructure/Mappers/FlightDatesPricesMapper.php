<?php

namespace Travel\Infraestructure\Mappers;

use Travel\Domain\DTOs\FlightPricesDTO;

class FlightDatesPricesMapper
{
    public static function mapFromApiResponse(array $response): array
    {
        $mappedData = [];
        foreach ($response as $outerKey => $innerArray) {
            foreach ($innerArray as $innerKey => $value) {
                $mappedData[$outerKey][$innerKey] = $value;
            }
        }

        return $mappedData;
    }
}
