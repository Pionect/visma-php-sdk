<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DiscountCodeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DiscountCodeDto>
 */
class DiscountCodeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'discountCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'discountType' => $this->faker->word(),
            'applicableTo' => $this->faker->word(),
            'applyToDeferredRevenue' => $this->faker->boolean(),
            'manual' => $this->faker->boolean(),
            'excludeFromDiscountableAmount' => $this->faker->boolean(),
            'skipDocumentDiscounts' => $this->faker->boolean(),
            'autoNumbering' => $this->faker->boolean(),
            'lastNumber' => $this->faker->word(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountCodeDto::class;
    }
}
