<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierInvoiceLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInvoiceLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'transactionDescription' => $this->faker->sentence(),
            'quantity' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'unitCostInCurrency' => $this->faker->word(),
            'costInCurrency' => $this->faker->word(),
            'discountPercent' => $this->faker->word(),
            'discountAmountInCurrency' => $this->faker->word(),
            'discountUnitCostInCurrency' => $this->faker->word(),
            'manualDiscount' => $this->faker->word(),
            'accountNumber' => $this->faker->word(),
            'subaccount' => [],
            'deferralSchedule' => $this->faker->word(),
            'deferralCode' => $this->faker->word(),
            'vatCodeId' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'projectId' => $this->faker->word(),
            'projectInternalId' => $this->faker->word(),
            'projectTaskId' => $this->faker->word(),
            'projectTaskInternalId' => $this->faker->word(),
            'splitLine' => $this->faker->word(),
            'undoSplitLine' => $this->faker->word(),
            'splitHierarchy' => $this->faker->word(),
            'retainagePct' => $this->faker->word(),
            'curyRetainageAmt' => $this->faker->word(),
            'linkLine' => $this->faker->word(),
            'termStartDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'termEndDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'externalInventoryId' => $this->faker->word(),
            'prebookAccountNumber' => $this->faker->word(),
            'prebookSubaccount' => [],
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceLineUpdateDto::class;
    }
}
