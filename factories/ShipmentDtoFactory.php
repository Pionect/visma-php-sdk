<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shipmentNumber' => $this->faker->word(),
            'shipmentType' => $this->faker->word(),
            'status' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'operation' => $this->faker->word(),
            'shipmentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'fromWarehouse' => $this->faker->word(),
            'toWarehouse' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'owner' => $this->faker->word(),
            'shippedQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'shippedWeight' => $this->faker->randomFloat(2, 0, 1000),
            'shippedVolume' => $this->faker->randomFloat(2, 0, 1000),
            'packages' => $this->faker->numberBetween(1, 100),
            'packagesWeight' => $this->faker->randomFloat(2, 0, 1000),
            'packagesVolume' => $this->faker->randomFloat(2, 0, 1000),
            'controlQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'deliveryAddress' => $this->faker->word(),
            'deliveryContact' => $this->faker->word(),
            'shipVia' => $this->faker->word(),
            'fobPoint' => $this->faker->word(),
            'shippingTerms' => $this->faker->word(),
            'shippingZone' => $this->faker->word(),
            'residentialDelivery' => $this->faker->boolean(),
            'saturdayDelivery' => $this->faker->boolean(),
            'useCustomerAccount' => $this->faker->boolean(),
            'insurance' => $this->faker->boolean(),
            'freightCost' => $this->faker->randomFloat(2, 0, 1000),
            'freightAmt' => $this->faker->randomFloat(2, 0, 1000),
            'transactionType' => $this->faker->word(),
            'modeOfTrasport' => $this->faker->word(),
            'container' => $this->faker->boolean(),
            'shipmentDetailLines' => [],
            'shipmentOrderLines' => [],
            'shipmentPackageLines' => [],
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'customStr1' => $this->faker->word(),
            'customStr2' => $this->faker->word(),
            'customStr3' => $this->faker->word(),
            'customStr4' => $this->faker->word(),
            'customStr5' => $this->faker->word(),
            'customDec1' => $this->faker->randomFloat(2, 0, 1000),
            'customDec2' => $this->faker->randomFloat(2, 0, 1000),
            'customInt1' => $this->faker->numberBetween(1, 100),
            'customInt2' => $this->faker->numberBetween(1, 100),
            'customDateTimeUtc1' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentDto::class;
    }
}
