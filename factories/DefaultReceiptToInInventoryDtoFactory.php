<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultReceiptToInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultReceiptToInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DefaultReceiptToInInventoryDto::class;
    }
}
