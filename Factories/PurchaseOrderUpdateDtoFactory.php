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
            'shippingContact' => PurchaseOrderContactUpdateDtoFactory::new()->make(),
            'shippingAddress' => PurchaseOrderAddressUpdateDtoFactory::new()->make(),
            'fobPoint' => $this->faker->word(),
            'shipVia' => $this->faker->word(),
            'shipTerms' => $this->faker->word(),
            'remitContact' => PurchaseOrderContactUpdateDtoFactory::new()->make(),
            'remitAddress' => PurchaseOrderAddressUpdateDtoFactory::new()->make(),
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
            'supplier' => $this->faker->word(),
            'location' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->uuid(),
            'owner' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'exchangeRate' => null,
            'supplierRef' => $this->faker->word(),
            'controlTotal' => null,
            'branch' => $this->faker->word(),
            'lines' => [],
            'changeDatesOnLines' => $this->faker->boolean(),
            'note' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
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
            'timeStamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderUpdateDto::class;
    }
}
