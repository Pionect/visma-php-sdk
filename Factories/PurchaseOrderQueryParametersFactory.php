<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseOrderQueryParameters;
use Pionect\VismaSdk\Enums\PurchaseOrderLineOrderTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'orderType' => $this->faker->randomElement(PurchaseOrderLineOrderTypeEnum::cases()),
            'orderStatus' => $this->faker->randomElement(PurchaseOrderStatusEnum::cases()),
            'supplier' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'orderDate' => $this->faker->word(),
            'orderDateCondition' => $this->faker->word(),
            'deliveryDate' => $this->faker->word(),
            'deliveryDateCondition' => $this->faker->word(),
            'includeCustomFreeFields' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderQueryParameters::class;
    }
}
