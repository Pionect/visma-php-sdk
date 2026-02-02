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
            'breakAmount' => null,
            'amountTo' => null,
            'lastBreakAmount' => null,
            'lastAmountTo' => null,
            'pendingBreakAmount' => null,
            'breakQuantity' => null,
            'quantityTo' => null,
            'lastBreakQuantity' => null,
            'lastQuantityTo' => null,
            'pendingBreakQuantity' => null,
            'discountAmount' => null,
            'discountPercent' => null,
            'lastDiscountAmount' => null,
            'lastDiscountPercent' => null,
            'lastDiscount' => null,
            'pendingDiscountAmount' => null,
            'pendingDiscountPercent' => null,
            'freeItemQty' => null,
            'lastFreeItemQty' => null,
            'pendingFreeItemQty' => null,
            'pendingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountBreakpointDto::class;
    }
}
