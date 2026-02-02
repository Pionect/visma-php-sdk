<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryDocumentQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryDocumentQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'status' => $this->faker->word(),
            'date' => $this->faker->word(),
            'dateCondition' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'orderBy' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
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
