<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ContractTemplateQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContractTemplateQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'expandAttributes' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ContractTemplateQueryParameters::class;
    }
}
