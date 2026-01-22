<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\VatQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatQueryParameters::class;
    }
}
