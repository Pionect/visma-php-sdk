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
            'postPeriod' => null,
            'warehouseId' => $this->faker->uuid(),
            'supplierId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
            'currency' => $this->faker->word(),
            'exchangeRate' => null,
            'createBill' => $this->faker->boolean(),
            'supplierRef' => $this->faker->word(),
            'controlQty' => null,
            'controlAmount' => null,
            'branchNumber' => $this->faker->word(),
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
        return PurchaseReceiptUpdateDto::class;
    }
}
