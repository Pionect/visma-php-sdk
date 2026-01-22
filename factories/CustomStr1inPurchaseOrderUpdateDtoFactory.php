<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr1inPurchaseOrderUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr1inPurchaseOrderUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr1inPurchaseOrderUpdateDto::class;
    }
}
