<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'skipDiscount' => $this->faker->boolean(),
            'discountCode' => $this->faker->word(),
            'sequanceId' => $this->faker->uuid(),
            'type' => $this->faker->word(),
            'manualDiscount' => $this->faker->boolean(),
            'discountableAmt' => $this->faker->randomFloat(2, 0, 1000),
            'discountableQty' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmt' => $this->faker->randomFloat(2, 0, 1000),
            'discount' => $this->faker->randomFloat(2, 0, 1000),
            'freeItem' => $this->faker->numberBetween(1, 100),
            'freeItemQty' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountDetailDto::class;
    }
}
