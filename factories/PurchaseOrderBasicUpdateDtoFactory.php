<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promisedOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'supplier' => SupplierInPurchaseOrderBasicUpdateDtoFactory::new()->make(),
            'location' => $this->faker->word(),
            'gln' => GlnInPurchaseOrderBasicUpdateDtoFactory::new()->make(),
            'vatRegistrationId' => VatRegistrationIdInPurchaseOrderBasicUpdateDtoFactory::new()->make(),
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
            'customStr1' => CustomStr1InPurchaseOrderBasicUpdateDtoFactory::new()->make(),
            'customStr2' => CustomStr2InPurchaseOrderBasicUpdateDtoFactory::new()->make(),
            'customStr3' => CustomStr3InPurchaseOrderBasicUpdateDtoFactory::new()->make(),
            'customStr4' => CustomStr4InPurchaseOrderBasicUpdateDtoFactory::new()->make(),
            'customStr5' => CustomStr5InPurchaseOrderBasicUpdateDtoFactory::new()->make(),
            'customDec1' => CustomDec1InPurchaseOrderBasicUpdateDtoFactory::new()->make(),
            'customDec2' => CustomDec2InPurchaseOrderBasicUpdateDtoFactory::new()->make(),
            'customInt1' => CustomInt1InPurchaseOrderBasicUpdateDtoFactory::new()->make(),
            'customInt2' => CustomInt2InPurchaseOrderBasicUpdateDtoFactory::new()->make(),
            'customDateTimeUtc1' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderBasicUpdateDto::class;
    }
}
