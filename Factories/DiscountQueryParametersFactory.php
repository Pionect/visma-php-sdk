<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => $this->faker->word(),
            'createdDateTimeCondition' => $this->faker->word(),
            'discountCode' => $this->faker->word(),
            'series' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountQueryParameters::class;
    }
}
