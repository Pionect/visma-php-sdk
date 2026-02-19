<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryTransferDocumentQueryParameters;
use Pionect\VismaSdk\Enums\InventoryAdjustmentStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryTransferDocumentQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouse' => $this->faker->word(),
            'toWarehouse' => $this->faker->word(),
            'status' => $this->faker->randomElement(InventoryAdjustmentStatusEnum::cases()),
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
        return InventoryTransferDocumentQueryParameters::class;
    }
}
