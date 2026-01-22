<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DiscountDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountDtoFactory extends Factory
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
            'lastUpdateDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'freeItem' => $this->faker->numberBetween(1, 100),
            'pendingFreeItem' => $this->faker->numberBetween(1, 100),
            'lastFreeItem' => $this->faker->numberBetween(1, 100),
            'lineCntr' => $this->faker->numberBetween(1, 100),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'discountBreakpoints' => [],
            'customers' => [],
            'items' => [],
            'warehouses' => [],
            'customerPriceClasses' => [],
            'itemPriceClasses' => [],
            'branches' => [],
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountDto::class;
    }
}
