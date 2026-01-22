<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInPurchaseReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInPurchaseReceiptLineDtoFactory extends Factory
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
        return LocationInPurchaseReceiptLineDto::class;
    }
}
