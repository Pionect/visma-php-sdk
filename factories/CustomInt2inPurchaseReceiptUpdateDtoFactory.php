<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomInt2inPurchaseReceiptUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomInt2inPurchaseReceiptUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CustomInt2inPurchaseReceiptUpdateDto::class;
    }
}
