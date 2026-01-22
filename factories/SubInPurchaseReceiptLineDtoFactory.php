<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SubInPurchaseReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SubInPurchaseReceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SubInPurchaseReceiptLineDto::class;
    }
}
