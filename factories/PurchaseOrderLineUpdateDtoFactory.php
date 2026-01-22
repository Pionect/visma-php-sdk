<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseOrderLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'inventory' => $this->faker->word(),
            'lineType' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'lineDescription' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'orderQty' => $this->faker->word(),
            'unitCost' => $this->faker->word(),
            'extCost' => $this->faker->word(),
            'discountAmount' => $this->faker->word(),
            'discountPercent' => $this->faker->word(),
            'manualDiscount' => $this->faker->word(),
            'discountCode' => $this->faker->word(),
            'amount' => $this->faker->word(),
            'alternateId' => $this->faker->word(),
            'minReceipt' => $this->faker->word(),
            'maxReceipt' => $this->faker->word(),
            'completeOn' => $this->faker->word(),
            'receiptAction' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'account' => $this->faker->word(),
            'sub' => [],
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'requested' => $this->faker->word(),
            'promised' => $this->faker->word(),
            'note' => $this->faker->word(),
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
            'completed' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderLineUpdateDto::class;
    }
}
