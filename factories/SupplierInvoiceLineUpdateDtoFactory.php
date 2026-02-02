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
            'quantity' => null,
            'uom' => $this->faker->word(),
            'unitCostInCurrency' => null,
            'costInCurrency' => null,
            'discountPercent' => null,
            'discountAmountInCurrency' => null,
            'discountUnitCostInCurrency' => null,
            'manualDiscount' => $this->faker->boolean(),
            'accountNumber' => $this->faker->word(),
            'subaccount' => [],
            'deferralSchedule' => $this->faker->numberBetween(1, 100),
            'deferralCode' => $this->faker->word(),
            'vatCodeId' => $this->faker->uuid(),
            'branch' => null,
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'projectId' => $this->faker->uuid(),
            'projectInternalId' => $this->faker->numberBetween(1, 1000),
            'projectTaskId' => $this->faker->uuid(),
            'projectTaskInternalId' => $this->faker->numberBetween(1, 1000),
            'splitLine' => $this->faker->boolean(),
            'undoSplitLine' => $this->faker->boolean(),
            'splitHierarchy' => $this->faker->word(),
            'retainagePct' => null,
            'curyRetainageAmt' => null,
            'linkLine' => LinkLineDtoFactory::new()->make(),
            'termStartDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'termEndDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'externalInventoryId' => $this->faker->uuid(),
            'prebookAccountNumber' => $this->faker->word(),
            'prebookSubaccount' => [],
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceLineUpdateDto::class;
    }
}
