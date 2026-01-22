<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ActualSubInPurchaseReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ActualSubInPurchaseReceiptLineDtoFactory extends Factory
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
        return ActualSubInPurchaseReceiptLineDto::class;
    }
}
