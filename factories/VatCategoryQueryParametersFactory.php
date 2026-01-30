<?php

namespace Pionect\VismaSdk\Factories;

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
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => $this->faker->word(),
            'createdDateTimeCondition' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatCategoryQueryParameters::class;
    }
}
