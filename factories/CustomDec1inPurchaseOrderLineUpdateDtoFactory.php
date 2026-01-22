<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomDec1inPurchaseOrderLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomDec1inPurchaseOrderLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return CustomDec1inPurchaseOrderLineUpdateDto::class;
    }
}
