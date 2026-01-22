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
            'lineNbr' => $this->faker->word(),
            'pendingBreakAmount' => $this->faker->word(),
            'pendingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'pendingDiscountPercent' => $this->faker->word(),
            'pendingDiscountAmount' => $this->faker->word(),
            'pendingBreakQuantity' => $this->faker->word(),
            'breakAmount' => $this->faker->word(),
            'discountAmount' => $this->faker->word(),
            'discountPercent' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountBreakpointUpdateDto::class;
    }
}
