<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'orderNbr' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'status' => $this->faker->word(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promisedOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'supplier' => $this->faker->word(),
            'location' => $this->faker->word(),
            'owner' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'supplierRef' => $this->faker->word(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'lineTotal' => $this->faker->randomFloat(2, 0, 1000),
            'lineTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'taxTotal' => $this->faker->randomFloat(2, 0, 1000),
            'taxTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'orderTotal' => $this->faker->randomFloat(2, 0, 1000),
            'orderTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'controlTotal' => $this->faker->randomFloat(2, 0, 1000),
            'controlTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'branch' => $this->faker->word(),
            'lines' => [],
            'taxDetails' => [],
            'purchaseReceipts' => [],
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
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
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderBasicDto::class;
    }
}
