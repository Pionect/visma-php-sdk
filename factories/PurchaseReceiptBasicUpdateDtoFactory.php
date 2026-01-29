<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseReceiptBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lines' => [],
            'receiptType' => $this->faker->word(),
            'receiptNbr' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => PostPeriodInPurchaseReceiptBasicUpdateDtoFactory::new()->make(),
            'warehouseId' => $this->faker->uuid(),
            'supplierId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
            'currency' => $this->faker->word(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'createBill' => $this->faker->boolean(),
            'supplierRef' => $this->faker->word(),
            'controlQty' => $this->faker->randomFloat(2, 0, 1000),
            'controlAmount' => $this->faker->randomFloat(2, 0, 1000),
            'branchNumber' => $this->faker->word(),
            'customStr1' => CustomStr1InPurchaseReceiptBasicUpdateDtoFactory::new()->make(),
            'customStr2' => CustomStr2InPurchaseReceiptBasicUpdateDtoFactory::new()->make(),
            'customStr3' => CustomStr3InPurchaseReceiptBasicUpdateDtoFactory::new()->make(),
            'customStr4' => CustomStr4InPurchaseReceiptBasicUpdateDtoFactory::new()->make(),
            'customStr5' => CustomStr5InPurchaseReceiptBasicUpdateDtoFactory::new()->make(),
            'customDec1' => CustomDec1InPurchaseReceiptBasicUpdateDtoFactory::new()->make(),
            'customDec2' => CustomDec2InPurchaseReceiptBasicUpdateDtoFactory::new()->make(),
            'customInt1' => CustomInt1InPurchaseReceiptBasicUpdateDtoFactory::new()->make(),
            'customInt2' => CustomInt2InPurchaseReceiptBasicUpdateDtoFactory::new()->make(),
            'customDateTimeUtc1' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptBasicUpdateDto::class;
    }
}
