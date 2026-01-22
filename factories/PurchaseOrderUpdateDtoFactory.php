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
            'dontPrint' => $this->faker->word(),
            'dontEmail' => $this->faker->safeEmail(),
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'hold' => $this->faker->word(),
            'date' => $this->faker->word(),
            'promisedOn' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'supplier' => $this->faker->word(),
            'location' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->word(),
            'owner' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'exchangeRate' => $this->faker->word(),
            'supplierRef' => $this->faker->word(),
            'controlTotal' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'lines' => [],
            'changeDatesOnLines' => $this->faker->boolean(),
            'note' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->word(),
            'customStr1' => $this->faker->word(),
            'customStr2' => $this->faker->word(),
            'customStr3' => $this->faker->word(),
            'customStr4' => $this->faker->word(),
            'customStr5' => $this->faker->word(),
            'customDec1' => $this->faker->word(),
            'customDec2' => $this->faker->word(),
            'customInt1' => $this->faker->word(),
            'customInt2' => $this->faker->word(),
            'customDateTimeUtc1' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderUpdateDto::class;
    }
}
