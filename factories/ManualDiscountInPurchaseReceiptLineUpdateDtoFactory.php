<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ManualDiscountInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ManualDiscountInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ManualDiscountInPurchaseReceiptLineUpdateDto::class;
    }
}
