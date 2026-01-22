<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ManualDiscountInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ManualDiscountInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ManualDiscountInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
