<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseReceiptBasicUpdateDto;
use Pionect\VismaSdk\Enums\PurchaseReceiptsTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lines' => [],
            'receiptType' => $this->faker->randomElement(PurchaseReceiptsTypeEnum::cases()),
            'receiptNbr' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
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
            'timeStamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptBasicUpdateDto::class;
    }
}
