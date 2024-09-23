<?php

namespace Travel\Domain\DTOs;

class FlightPricesDTO
{
    private $prices;

    /**
     * Constructor method for the class.
     *
     * @param array $prices Array of dates and prices.
     *
     * @return void
     */
    public function __construct(array $prices)
    {
        $this->prices = $prices;
    }

    public function getPrices(): array
    {
        return $this->prices;
    }
}
