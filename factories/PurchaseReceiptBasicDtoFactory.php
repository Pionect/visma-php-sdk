<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseReceiptBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'receiptType' => $this->faker->word(),
            'receiptNbr' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'status' => $this->faker->word(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'location' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'createBill' => $this->faker->boolean(),
            'supplierRef' => $this->faker->word(),
            'totalQty' => $this->faker->randomFloat(2, 0, 1000),
            'controlQty' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTaxableTotal' => $this->faker->randomFloat(2, 0, 1000),
            'totalAmt' => $this->faker->randomFloat(2, 0, 1000),
            'controlTotal' => $this->faker->randomFloat(2, 0, 1000),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branchNumber' => $this->faker->word(),
            'lines' => [],
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'customStr1' => $this->faker->word(),
            'customStr2' => $this->faker->word(),
            'customStr3' => $this->faker->word(),
            'customStr4' => $this->faker->word(),
            'customStr5' => $this->faker->word(),
            'customDec1' => $this->faker->randomFloat(2, 0, 1000),
            'customDec2' => $this->faker->randomFloat(2, 0, 1000),
            'customInt1' => $this->faker->numberBetween(1, 100),
            'customInt2' => $this->faker->numberBetween(1, 100),
            'customDateTimeUtc1' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptBasicDto::class;
    }
}
