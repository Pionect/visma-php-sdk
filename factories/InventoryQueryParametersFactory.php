<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'pageSize' => $this->faker->numberBetween(1, 100),
            'alternateId' => $this->faker->uuid(),
            'inventoryNumber' => $this->faker->word(),
            'salesCategory' => $this->faker->numberBetween(1, 100),
            'addCostPriceStatistics' => $this->faker->boolean(),
            'attributes' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'availabilityLastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'availabilityLastModifiedDateTimeCondition' => $this->faker->word(),
            'inventoryTypes' => [],
            'expandCrossReference' => $this->faker->boolean(),
            'expandAttachment' => $this->faker->boolean(),
            'expandAttribute' => $this->faker->boolean(),
            'expandWarehouseDetail' => $this->faker->boolean(),
            'expandAccountInformation' => $this->faker->boolean(),
            'expandInventoryUnits' => $this->faker->boolean(),
            'expandSupplierDetails' => $this->faker->boolean(),
            'expandSalesCategories' => $this->faker->boolean(),
            'expandNote' => $this->faker->boolean(),
            'attachmentLastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'attachmentLastModifiedDateTimeCondition' => $this->faker->word(),
            'status' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'greaterThanValue' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryQueryParameters::class;
    }
}
