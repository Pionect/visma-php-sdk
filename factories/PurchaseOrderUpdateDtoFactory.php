<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'shippingDestinationType' => $this->faker->word(),
            'shipTo' => $this->faker->word(),
            'shippingLocation' => $this->faker->word(),
            'shippingContact' => $this->faker->word(),
            'shippingAddress' => $this->faker->word(),
            'fobPoint' => $this->faker->word(),
            'shipVia' => $this->faker->word(),
            'shipTerms' => $this->faker->word(),
            'remitContact' => $this->faker->word(),
            'remitAddress' => $this->faker->word(),
            'terms' => $this->faker->word(),
            'supplierVatZone' => $this->faker->word(),
            'discountDetails' => [],
            'dontPrint' => $this->faker->boolean(),
            'dontEmail' => $this->faker->boolean(),
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promisedOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'supplier' => SupplierInPurchaseOrderUpdateDtoFactory::new()->make(),
            'location' => $this->faker->word(),
            'gln' => GlnInPurchaseOrderUpdateDtoFactory::new()->make(),
            'vatRegistrationId' => VatRegistrationIdInPurchaseOrderUpdateDtoFactory::new()->make(),
            'owner' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'supplierRef' => $this->faker->word(),
            'controlTotal' => $this->faker->randomFloat(2, 0, 1000),
            'branch' => $this->faker->word(),
            'lines' => [],
            'changeDatesOnLines' => $this->faker->boolean(),
            'note' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'customStr1' => CustomStr1InPurchaseOrderUpdateDtoFactory::new()->make(),
            'customStr2' => CustomStr2InPurchaseOrderUpdateDtoFactory::new()->make(),
            'customStr3' => CustomStr3InPurchaseOrderUpdateDtoFactory::new()->make(),
            'customStr4' => CustomStr4InPurchaseOrderUpdateDtoFactory::new()->make(),
            'customStr5' => CustomStr5InPurchaseOrderUpdateDtoFactory::new()->make(),
            'customDec1' => CustomDec1InPurchaseOrderUpdateDtoFactory::new()->make(),
            'customDec2' => CustomDec2InPurchaseOrderUpdateDtoFactory::new()->make(),
            'customInt1' => CustomInt1InPurchaseOrderUpdateDtoFactory::new()->make(),
            'customInt2' => CustomInt2InPurchaseOrderUpdateDtoFactory::new()->make(),
            'customDateTimeUtc1' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderUpdateDto::class;
    }
}
