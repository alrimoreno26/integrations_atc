<?php

namespace Travel\Infraestructure\Mappers;

use Travel\Domain\DTOs\FlightDatesDTO;

class FlightDatesMapper
{
    public static function mapFromApiResponse(array $response): FlightDatesDTO
    {
        return new FlightDatesDTO(
            $response['is_authorized'] ?? false,
            $response['has_filter_dates'] ?? false,
            $response['departure_dates'] ?? [],
            $response['return_dates'] ?? []
        );
    }
}
