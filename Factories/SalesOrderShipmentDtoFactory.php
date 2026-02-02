<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesOrderShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderShipmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'shipmentType' => $this->faker->word(),
            'shipmentNo' => $this->faker->word(),
            'shipmentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shippedQty' => null,
            'shippedWeight' => null,
            'shippedVolume' => null,
            'invoiceType' => $this->faker->word(),
            'invoiceNo' => $this->faker->word(),
            'inventoryDocType' => $this->faker->word(),
            'inventoryRefNo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderShipmentDto::class;
    }
}
