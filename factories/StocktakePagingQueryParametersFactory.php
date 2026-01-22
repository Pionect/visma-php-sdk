<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\StocktakePagingQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class StocktakePagingQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouse' => $this->faker->word(),
            'location' => $this->faker->word(),
            'inventory' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'summaryStatus' => $this->faker->word(),
            'startWithLine' => $this->faker->numberBetween(1, 100),
            'endWithLine' => $this->faker->numberBetween(1, 100),
            'freezeDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'freezeDateTimeCondition' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'expirationDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expirationDateTimeCondition' => $this->faker->word(),
            'status' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return StocktakePagingQueryParameters::class;
    }
}
