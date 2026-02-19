<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\StocktakePagingQueryParameters;
use Pionect\VismaSdk\Enums\StocktakeLineV2dtoStatusEnum;
use Pionect\VismaSdk\Enums\StocktakeV2dtoSummaryStatusEnum;
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
            'summaryStatus' => $this->faker->randomElement(StocktakeV2dtoSummaryStatusEnum::cases()),
            'startWithLine' => $this->faker->numberBetween(1, 100),
            'endWithLine' => $this->faker->numberBetween(1, 100),
            'freezeDateTime' => $this->faker->word(),
            'freezeDateTimeCondition' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'expirationDateTime' => $this->faker->word(),
            'expirationDateTimeCondition' => $this->faker->word(),
            'status' => $this->faker->randomElement(StocktakeLineV2dtoStatusEnum::cases()),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return StocktakePagingQueryParameters::class;
    }
}
