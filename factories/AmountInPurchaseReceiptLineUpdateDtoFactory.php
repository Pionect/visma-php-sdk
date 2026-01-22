<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AmountInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AmountInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return AmountInPurchaseReceiptLineUpdateDto::class;
    }
}
