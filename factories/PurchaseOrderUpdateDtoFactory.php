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
            'supplier' => null,
            'location' => $this->faker->word(),
            'gln' => null,
            'vatRegistrationId' => null,
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
            'customStr1' => null,
            'customStr2' => null,
            'customStr3' => null,
            'customStr4' => null,
            'customStr5' => null,
            'customDec1' => null,
            'customDec2' => null,
            'customInt1' => null,
            'customInt2' => null,
            'customDateTimeUtc1' => null,
            'timeStamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderUpdateDto::class;
    }
}
