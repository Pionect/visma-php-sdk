<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInPurchaseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInPurchaseReceiptDtoFactory extends Factory
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
        return LocationInPurchaseReceiptDto::class;
    }
}
