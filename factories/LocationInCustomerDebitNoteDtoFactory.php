<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInCustomerDebitNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInCustomerDebitNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'countryId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInCustomerDebitNoteDto::class;
    }
}
