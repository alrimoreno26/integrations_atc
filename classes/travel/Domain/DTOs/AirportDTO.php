<?php

namespace Travel\Domain\DTOs;

class AirportDTO
{
    private $iataAirportCode;
    private $icaoAirportCode;
    private $name;
    private $city;
    private $iataCountryCode;
    private $country;
    private $longitude;
    private $latitude;
    private $altitude;
    private $timeZone;

    /**
     * Class constructor.
     *
     * @param string $iataAirportCode The IATA code of the airport.
     * @param string $icaoAirportCode The ICAO code of the airport.
     * @param string $name The name of the airport.
     * @param string $city The city where the airport is located.
     * @param string $iataCountryCode The IATA code of the country where the airport is located.
     * @param string $country The name of the country where the airport is located.
     * @param string $longitude The longitude of the airport.
     * @param string $latitude The latitude of the airport.
     * @param string $altitude The altitude of the airport.
     * @param string $timeZone The time zone of the airport.
     */
    public function __construct(
        string $iataAirportCode,
        string $icaoAirportCode,
        string $name,
        string $city,
        string $iataCountryCode,
        string $country,
        string $longitude,
        string $latitude,
        string $altitude,
        string $timeZone
    ) {
        $this->iataAirportCode = $iataAirportCode;
        $this->icaoAirportCode = $icaoAirportCode;
        $this->name = $name;
        $this->city = $city;
        $this->iataCountryCode = $iataCountryCode;
        $this->country = $country;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->altitude = $altitude;
        $this->timeZone = $timeZone;
    }

    // Getters
    public function getIataAirportCode(): string { return $this->iataAirportCode; }
    public function getIcaoAirportCode(): string { return $this->icaoAirportCode; }
    public function getName(): string { return $this->name; }
    public function getCity(): string { return $this->city; }
    public function getIataCountryCode(): string { return $this->iataCountryCode; }
    public function getCountry(): string { return $this->country; }
    public function getLongitude(): string { return $this->longitude; }
    public function getLatitude(): string { return $this->latitude; }
    public function getAltitude(): string { return $this->altitude; }
    public function getTimeZone(): string { return $this->timeZone; }
}
