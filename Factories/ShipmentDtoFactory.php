<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ShipmentDto;
use Pionect\VismaSdk\Enums\SalesOrderLineOperationEnum;
use Pionect\VismaSdk\Enums\ShipmentShipmentTypeEnum;
use Pionect\VismaSdk\Enums\ShipmentStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ShipmentDto>
 */
class ShipmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'timeStamp' => $this->faker->word(),
            'shipmentNumber' => $this->faker->word(),
            'shipmentType' => $this->faker->randomElement(ShipmentShipmentTypeEnum::cases()),
            'status' => $this->faker->randomElement(ShipmentStatusEnum::cases()),
            'hold' => $this->faker->boolean(),
            'operation' => $this->faker->randomElement(SalesOrderLineOperationEnum::cases()),
            'shipmentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'customer' => null,
            'location' => null,
            'fromWarehouse' => null,
            'toWarehouse' => null,
            'currencyId' => $this->faker->uuid(),
            'owner' => null,
            'shippedQuantity' => null,
            'shippedWeight' => null,
            'shippedVolume' => null,
            'packages' => $this->faker->numberBetween(1, 100),
            'packagesWeight' => null,
            'packagesVolume' => null,
            'controlQuantity' => null,
            'deliveryAddress' => null,
            'deliveryContact' => null,
            'shipVia' => null,
            'fobPoint' => null,
            'shippingTerms' => null,
            'shippingZone' => null,
            'residentialDelivery' => $this->faker->boolean(),
            'saturdayDelivery' => $this->faker->boolean(),
            'useCustomerAccount' => $this->faker->boolean(),
            'insurance' => $this->faker->boolean(),
            'freightCost' => null,
            'freightAmt' => null,
            'transactionType' => null,
            'modeOfTrasport' => null,
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
            'customDec1' => null,
            'customDec2' => null,
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
