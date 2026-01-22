<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomInt1inPurchaseReceiptUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomInt1inPurchaseReceiptUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CustomInt1inPurchaseReceiptUpdateDto::class;
    }
}
