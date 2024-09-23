<?php

namespace Travel\Domain\DTOs;

class FlightDatesDTO
{
    public $isAuthorized;
    public $hasFilterDates;
    public $departureDates;
    public $returnDates;


    /**
     * Constructor method for the class.
     *
     * @param bool $isAuthorized Flag indicating if user is authorized.
     * @param bool $hasFilterDates Flag indicating if filter dates are provided.
     * @param array $departureDates Array of departure dates.
     * @param array $returnDates Array of return dates.
     *
     * @return void
     */
    public function __construct(
        bool $isAuthorized,
        bool $hasFilterDates,
        array $departureDates,
        array $returnDates
    ) {
        $this->isAuthorized = $isAuthorized;
        $this->hasFilterDates = $hasFilterDates;
        $this->departureDates = $departureDates;
        $this->returnDates = $returnDates;
    }

    // Getters
    public function getIsAuthorized(): bool{return $this->isAuthorized;}
    public function getHasFilterDates(): bool{return $this->hasFilterDates;}
    public function getDepartureDates(): array{return $this->departureDates;}
    public function getReturnDates(): array{return $this->returnDates;}
}
