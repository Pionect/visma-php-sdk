<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AmountInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AmountInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return AmountInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
