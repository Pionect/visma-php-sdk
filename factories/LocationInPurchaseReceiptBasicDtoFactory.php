<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInPurchaseReceiptBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInPurchaseReceiptBasicDtoFactory extends Factory
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
        return LocationInPurchaseReceiptBasicDto::class;
    }
}
