<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierInvoiceLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInvoiceLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryNumber' => $this->faker->word(),
            'externalInventoryId' => $this->faker->uuid(),
            'stockItem' => $this->faker->boolean(),
            'transactionDescription' => $this->faker->sentence(),
            'quantity' => null,
            'uom' => $this->faker->word(),
            'unitCost' => null,
            'unitCostInCurrency' => null,
            'cost' => null,
            'costInCurrency' => null,
            'discountPercent' => null,
            'discountAmount' => null,
            'discountAmountInCurrency' => null,
            'discountUnitCost' => null,
            'discountUnitCostInCurrency' => null,
            'manualDiscount' => $this->faker->boolean(),
            'account' => null,
            'subaccount' => null,
            'prebookAccount' => null,
            'prebookSubaccount' => null,
            'deferralSchedule' => $this->faker->numberBetween(1, 100),
            'deferralScheduleNbr' => $this->faker->word(),
            'deferralCode' => $this->faker->word(),
            'vatCode' => null,
            'poNumber' => $this->faker->word(),
            'poLineNr' => $this->faker->numberBetween(1, 100),
            'poReceiptNbr' => $this->faker->word(),
            'poReceiptLineNbr' => $this->faker->numberBetween(1, 100),
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'splitHierarchy' => $this->faker->word(),
            'project' => null,
            'projectTask' => null,
            'attachments' => [],
            'retainagePct' => null,
            'curyRetainageAmt' => null,
            'termStartDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'termEndDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceLineDto::class;
    }
}
