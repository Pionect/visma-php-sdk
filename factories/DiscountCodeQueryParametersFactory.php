<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DiscountCodeQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountCodeQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTimeCondition' => $this->faker->word(),
            'discountCode' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountCodeQueryParameters::class;
    }
}
