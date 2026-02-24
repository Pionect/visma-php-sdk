<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderLineUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderLineLineTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderLineReceiptActionEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PurchaseOrderLineUpdateDto>
 */
class PurchaseOrderLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'branch' => $this->faker->word(),
            'inventory' => $this->faker->word(),
            'lineType' => $this->faker->randomElement(PurchaseOrderLineLineTypeEnum::cases()),
            'warehouse' => $this->faker->word(),
            'lineDescription' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'orderQty' => null,
            'unitCost' => null,
            'extCost' => null,
            'discountAmount' => null,
            'discountPercent' => null,
            'manualDiscount' => $this->faker->boolean(),
            'discountCode' => $this->faker->word(),
            'amount' => null,
            'alternateId' => $this->faker->uuid(),
            'minReceipt' => null,
            'maxReceipt' => null,
            'completeOn' => null,
            'receiptAction' => $this->faker->randomElement(PurchaseOrderLineReceiptActionEnum::cases()),
            'taxCategory' => $this->faker->word(),
            'account' => $this->faker->word(),
            'sub' => [],
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'requested' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promised' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
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
            'completed' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderLineUpdateDto::class;
    }
}
