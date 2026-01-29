<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ShipmentCreateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentCreateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'shipmentType' => $this->faker->word(),
            'operation' => $this->faker->word(),
            'shipmentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'location' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'owner' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'fromWarehouse' => $this->faker->word(),
            'toWarehouse' => $this->faker->word(),
            'controlQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'overrideContact' => $this->faker->boolean(),
            'businessName' => $this->faker->company(),
            'attention' => $this->faker->word(),
            'phone1' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'overrideAddress' => $this->faker->boolean(),
            'addressLine1' => $this->faker->word(),
            'addressLine2' => $this->faker->word(),
            'addressLine3' => $this->faker->word(),
            'city' => $this->faker->word(),
            'country' => $this->faker->word(),
            'county' => $this->faker->word(),
            'postalCode' => $this->faker->word(),
            'shipVia' => $this->faker->word(),
            'fobPoint' => $this->faker->word(),
            'shippingTerms' => $this->faker->word(),
            'shippingZone' => $this->faker->word(),
            'residentialDelivery' => $this->faker->boolean(),
            'saturdayDelivery' => $this->faker->boolean(),
            'useCustomerAccount' => $this->faker->boolean(),
            'insurance' => $this->faker->boolean(),
            'freightAmt' => $this->faker->randomFloat(2, 0, 1000),
            'freightCost' => $this->faker->randomFloat(2, 0, 1000),
            'transactionType' => $this->faker->numberBetween(1, 100),
            'modeOfTrasport' => $this->faker->word(),
            'container' => $this->faker->boolean(),
            'note' => $this->faker->word(),
            'shipmentDetailLines' => [],
            'shipmentPackageLines' => [],
            'customStr1' => CustomStr1InShipmentCreateDtoFactory::new()->make(),
            'customStr2' => CustomStr2InShipmentCreateDtoFactory::new()->make(),
            'customStr3' => CustomStr3InShipmentCreateDtoFactory::new()->make(),
            'customStr4' => CustomStr4InShipmentCreateDtoFactory::new()->make(),
            'customStr5' => CustomStr5InShipmentCreateDtoFactory::new()->make(),
            'customDec1' => CustomDec1InShipmentCreateDtoFactory::new()->make(),
            'customDec2' => CustomDec2InShipmentCreateDtoFactory::new()->make(),
            'customInt1' => CustomInt1InShipmentCreateDtoFactory::new()->make(),
            'customInt2' => CustomInt2InShipmentCreateDtoFactory::new()->make(),
            'customDateTimeUtc1' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentCreateDto::class;
    }
}
