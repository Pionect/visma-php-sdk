<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryQueryParameters;
use Pionect\VismaSdk\Enums\InventoryQueryParametersStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InventoryQueryParameters>
 */
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
            'availabilityLastModifiedDateTime' => $this->faker->word(),
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
            'attachmentLastModifiedDateTime' => $this->faker->word(),
            'attachmentLastModifiedDateTimeCondition' => $this->faker->word(),
            'status' => $this->faker->randomElement(InventoryQueryParametersStatusEnum::cases()),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'greaterThanValue' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => $this->faker->word(),
            'createdDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryQueryParameters::class;
    }
}
