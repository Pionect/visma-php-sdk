<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr1inPurchaseReceiptBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr1inPurchaseReceiptBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr1inPurchaseReceiptBasicUpdateDto::class;
    }
}
