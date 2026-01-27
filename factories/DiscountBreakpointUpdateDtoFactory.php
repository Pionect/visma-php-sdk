<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DiscountBreakpointUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountBreakpointUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'pendingBreakAmount' => $this->faker->randomFloat(2, 0, 1000),
            'pendingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'pendingDiscountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'pendingDiscountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'pendingBreakQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'breakAmount' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountBreakpointUpdateDto::class;
    }
}
