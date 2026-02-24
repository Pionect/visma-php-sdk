<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipmentsQueryParameters;
use Pionect\VismaSdk\Enums\ShipmentShipmentTypeEnum;
use Pionect\VismaSdk\Enums\ShipmentStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ShipmentsQueryParameters>
 */
class ShipmentsQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customerId' => $this->faker->numberBetween(1, 1000),
            'customerNumber' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'orderBy' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'status' => $this->faker->randomElement(ShipmentStatusEnum::cases()),
            'pageSize' => $this->faker->numberBetween(1, 100),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'shipmentType' => $this->faker->randomElement(ShipmentShipmentTypeEnum::cases()),
            'shipmentDate' => $this->faker->word(),
            'shipmentDateCondition' => $this->faker->word(),
            'includeCustomFreeFields' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentsQueryParameters::class;
    }
}
