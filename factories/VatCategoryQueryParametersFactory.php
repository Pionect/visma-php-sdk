<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\VatCategoryQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCategoryQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'vendorCd' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTimeCondition' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatCategoryQueryParameters::class;
    }
}
