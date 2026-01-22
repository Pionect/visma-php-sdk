<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UnitCostInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UnitCostInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return UnitCostInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
