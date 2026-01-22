<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SubaccountQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SubaccountQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return SubaccountQueryParameters::class;
    }
}
