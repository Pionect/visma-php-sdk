<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderBasicDto;
use Pionect\VismaSdk\Enums\PurchaseOrderLineOrderTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PurchaseOrderBasicDto>
 */
class PurchaseOrderBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->randomElement(PurchaseOrderLineOrderTypeEnum::cases()),
            'orderNbr' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'status' => $this->faker->randomElement(PurchaseOrderStatusEnum::cases()),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promisedOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'supplier' => null,
            'location' => null,
            'owner' => null,
            'currency' => $this->faker->word(),
            'supplierRef' => $this->faker->word(),
            'exchangeRate' => null,
            'lineTotal' => null,
            'lineTotalInBaseCurrency' => null,
            'vatExemptTotal' => null,
            'vatExemptTotalInBaseCurrency' => null,
            'taxTotal' => null,
            'taxTotalInBaseCurrency' => null,
            'orderTotal' => null,
            'orderTotalInBaseCurrency' => null,
            'controlTotal' => null,
            'controlTotalInBaseCurrency' => null,
            'branch' => null,
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
            'customDec1' => null,
            'customDec2' => null,
            'customInt1' => $this->faker->numberBetween(1, 100),
            'customInt2' => $this->faker->numberBetween(1, 100),
            'customDateTimeUtc1' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderBasicDto::class;
    }
}
