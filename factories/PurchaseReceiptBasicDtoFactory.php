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
            'timeStamp' => $this->faker->word(),
            'receiptType' => $this->faker->word(),
            'receiptNbr' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'status' => $this->faker->word(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'warehouse' => null,
            'supplier' => null,
            'location' => null,
            'currency' => $this->faker->word(),
            'exchangeRate' => null,
            'createBill' => $this->faker->boolean(),
            'supplierRef' => $this->faker->word(),
            'totalQty' => null,
            'controlQty' => null,
            'vatExemptTotal' => null,
            'vatTaxableTotal' => null,
            'totalAmt' => null,
            'controlTotal' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branchNumber' => $this->faker->word(),
            'lines' => [],
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
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
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptBasicDto::class;
    }
}
