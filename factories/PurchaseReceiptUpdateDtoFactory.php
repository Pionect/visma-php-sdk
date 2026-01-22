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
            'hold' => $this->faker->word(),
            'date' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'warehouseId' => $this->faker->word(),
            'supplierId' => $this->faker->word(),
            'locationId' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'exchangeRate' => $this->faker->word(),
            'createBill' => $this->faker->word(),
            'supplierRef' => $this->faker->word(),
            'controlQty' => $this->faker->word(),
            'controlAmount' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
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
        return PurchaseReceiptUpdateDto::class;
    }
}
