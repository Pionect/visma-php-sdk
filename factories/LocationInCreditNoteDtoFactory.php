<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInCreditNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInCreditNoteDtoFactory extends Factory
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
        return LocationInCreditNoteDto::class;
    }
}
