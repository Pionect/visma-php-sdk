<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\AccountQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AccountQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'includeAccountClassDescription' => $this->faker->boolean(),
            'greaterThanValue' => $this->faker->word(),
            'publicCode' => $this->faker->word(),
            'externalCode1' => $this->faker->word(),
            'externalCode2' => $this->faker->word(),
            'analysisCode' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountQueryParameters::class;
    }
}
