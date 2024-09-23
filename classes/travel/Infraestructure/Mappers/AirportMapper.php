<?php

namespace Travel\Infraestructure\Mappers;

use Travel\Domain\DTOs\AirportDTO;

class AirportMapper
{
    public static function mapFromApiResponse(array $response): array
    {
        return [
            'departure' => self::mapAirports($response['response']['airportsDeparture'] ?? []),
            'destination' => self::mapAirports($response['response']['airportsDest'] ?? [])
        ];
    }

    private static function mapAirports(array $airportDataList): array
    {
        return array_map(function ($airportData) {
            return new AirportDTO(
                $airportData['iata_airport_code'] ?? null,
                $airportData['icao_airport_code'] ?? null,
                $airportData['name'] ?? null,
                $airportData['city'] ?? null,
                $airportData['iata_country_code'] ?? null,
                $airportData['country'] ?? null,
                $airportData['longitude'] ?? null,
                $airportData['latitude'] ?? null,
                $airportData['altitude'] ?? null,
                $airportData['time_zone'] ?? null
            );
        }, $airportDataList);
    }
}
