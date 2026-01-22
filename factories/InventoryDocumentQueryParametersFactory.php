<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryDocumentQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryDocumentQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'status' => $this->faker->word(),
            'date' => $this->faker->word(),
            'dateCondition' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'orderBy' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryDocumentQueryParameters::class;
    }
}
