<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseReceiptUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lines' => [],
            'landedCost' => [],
            'note' => $this->faker->word(),
            'receiptType' => $this->faker->word(),
            'receiptNbr' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => PostPeriodInPurchaseReceiptUpdateDtoFactory::new()->make(),
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
            'customStr1' => CustomStr1InPurchaseReceiptUpdateDtoFactory::new()->make(),
            'customStr2' => CustomStr2InPurchaseReceiptUpdateDtoFactory::new()->make(),
            'customStr3' => CustomStr3InPurchaseReceiptUpdateDtoFactory::new()->make(),
            'customStr4' => CustomStr4InPurchaseReceiptUpdateDtoFactory::new()->make(),
            'customStr5' => CustomStr5InPurchaseReceiptUpdateDtoFactory::new()->make(),
            'customDec1' => CustomDec1InPurchaseReceiptUpdateDtoFactory::new()->make(),
            'customDec2' => CustomDec2InPurchaseReceiptUpdateDtoFactory::new()->make(),
            'customInt1' => CustomInt1InPurchaseReceiptUpdateDtoFactory::new()->make(),
            'customInt2' => CustomInt2InPurchaseReceiptUpdateDtoFactory::new()->make(),
            'customDateTimeUtc1' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptUpdateDto::class;
    }
}
