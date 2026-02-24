<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LandedCostQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\LandedCostQueryParameters>
 */
class LandedCostQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'code' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return LandedCostQueryParameters::class;
    }
}
