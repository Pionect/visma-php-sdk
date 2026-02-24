<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DiscountUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DiscountUpdateDto>
 */
class DiscountUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'discountCode' => $this->faker->word(),
            'series' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'discountBy' => $this->faker->word(),
            'breakBy' => $this->faker->word(),
            'promotional' => $this->faker->boolean(),
            'active' => $this->faker->boolean(),
            'prorateDiscount' => $this->faker->boolean(),
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'discountBreakpoints' => [],
        ];
    }

    protected function modelClass(): string
    {
        return DiscountUpdateDto::class;
    }
}
