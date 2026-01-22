<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInInventoryTransferLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInInventoryTransferLineDtoFactory extends Factory
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
        return LocationInInventoryTransferLineDto::class;
    }
}
