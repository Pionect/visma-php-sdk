<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountCodeInPurchaseOrderLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountCodeInPurchaseOrderLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountCodeInPurchaseOrderLineDto::class;
    }
}
