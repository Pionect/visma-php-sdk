<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInSupplierDocumentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInSupplierDocumentDtoFactory extends Factory
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
        return LocationInSupplierDocumentDto::class;
    }
}
