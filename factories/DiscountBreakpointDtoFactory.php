<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DiscountBreakpointDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountBreakpointDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'active' => $this->faker->boolean(),
            'breakAmount' => $this->faker->randomFloat(2, 0, 1000),
            'amountTo' => $this->faker->randomFloat(2, 0, 1000),
            'lastBreakAmount' => $this->faker->randomFloat(2, 0, 1000),
            'lastAmountTo' => $this->faker->randomFloat(2, 0, 1000),
            'pendingBreakAmount' => $this->faker->randomFloat(2, 0, 1000),
            'breakQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'quantityTo' => $this->faker->randomFloat(2, 0, 1000),
            'lastBreakQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'lastQuantityTo' => $this->faker->randomFloat(2, 0, 1000),
            'pendingBreakQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'lastDiscountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'lastDiscountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'lastDiscount' => $this->faker->randomFloat(2, 0, 1000),
            'pendingDiscountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'pendingDiscountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'freeItemQty' => $this->faker->randomFloat(2, 0, 1000),
            'lastFreeItemQty' => $this->faker->randomFloat(2, 0, 1000),
            'pendingFreeItemQty' => $this->faker->randomFloat(2, 0, 1000),
            'pendingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountBreakpointDto::class;
    }
}
