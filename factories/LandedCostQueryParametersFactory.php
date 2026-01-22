<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\LandedCostQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LandedCostQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'code' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
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
