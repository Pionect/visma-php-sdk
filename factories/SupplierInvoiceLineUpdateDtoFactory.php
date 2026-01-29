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
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryNumber' => $this->faker->word(),
            'transactionDescription' => $this->faker->sentence(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'unitCostInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'costInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'discountUnitCostInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'manualDiscount' => $this->faker->boolean(),
            'accountNumber' => $this->faker->word(),
            'subaccount' => [],
            'deferralSchedule' => $this->faker->numberBetween(1, 100),
            'deferralCode' => $this->faker->word(),
            'vatCodeId' => $this->faker->uuid(),
            'branch' => BranchInSupplierInvoiceLineUpdateDtoFactory::new()->make(),
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'projectId' => $this->faker->uuid(),
            'projectInternalId' => $this->faker->numberBetween(1, 1000),
            'projectTaskId' => $this->faker->uuid(),
            'projectTaskInternalId' => $this->faker->numberBetween(1, 1000),
            'splitLine' => $this->faker->boolean(),
            'undoSplitLine' => $this->faker->boolean(),
            'splitHierarchy' => $this->faker->word(),
            'retainagePct' => $this->faker->randomFloat(2, 0, 1000),
            'curyRetainageAmt' => $this->faker->randomFloat(2, 0, 1000),
            'linkLine' => LinkLineDtoFactory::new()->make(),
            'termStartDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'termEndDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'externalInventoryId' => $this->faker->uuid(),
            'prebookAccountNumber' => PrebookAccountNumberInSupplierInvoiceLineUpdateDtoFactory::new()->make(),
            'prebookSubaccount' => [],
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceLineUpdateDto::class;
    }
}
