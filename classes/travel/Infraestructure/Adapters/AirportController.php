<?php

namespace Travel\Infraestructure\Adapters;


use Travel\Application\Services\AirportService;

class AirportController
{
    private $airportService;

    public function __construct(AirportService $airportService)
    {
        $this->airportService = $airportService;
    }

    /**
     * Llama al servicio de búsqueda de aeropuertos con los parámetros adecuados.
     *
     * @param string|null $criteria
     * @return string JSON response
     */
    public function getAirports(string $criteria): string
    {
        try {
            $airports = $this->airportService->searchAirports($criteria);
            return json_encode(['status' => 'OK', 'airports' => $airports]);
        } catch (\Exception $e) {
            return json_encode(['status' => 'ERROR', 'message' => $e->getMessage()]);
        }
    }
}
