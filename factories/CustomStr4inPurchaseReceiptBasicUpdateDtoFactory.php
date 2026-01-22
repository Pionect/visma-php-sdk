<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr4inPurchaseReceiptBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr4inPurchaseReceiptBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr4inPurchaseReceiptBasicUpdateDto::class;
    }
}
