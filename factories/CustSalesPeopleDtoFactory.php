<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustSalesPeopleDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustSalesPeopleDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'bAccountId' => $this->faker->numberBetween(1, 1000),
            'customerName' => $this->faker->company(),
            'locationId' => $this->faker->numberBetween(1, 1000),
            'locationName' => $this->faker->company(),
            'isDefault' => $this->faker->boolean(),
            'commisionPct' => $this->faker->randomFloat(2, 0, 1000),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustSalesPeopleDto::class;
    }
}
