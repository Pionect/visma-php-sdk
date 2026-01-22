<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInExpenseReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInExpenseReceiptDto::class;
    }
}
