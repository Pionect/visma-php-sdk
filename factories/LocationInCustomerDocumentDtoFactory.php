<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInCustomerDocumentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInCustomerDocumentDtoFactory extends Factory
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
        return LocationInCustomerDocumentDto::class;
    }
}
