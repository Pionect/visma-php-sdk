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
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'unitCostInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'cost' => $this->faker->randomFloat(2, 0, 1000),
            'costInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'discountUnitCost' => $this->faker->randomFloat(2, 0, 1000),
            'discountUnitCostInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'manualDiscount' => $this->faker->boolean(),
            'account' => AccountInSupplierInvoiceLineDtoFactory::new()->make(),
            'subaccount' => SubaccountInSupplierInvoiceLineDtoFactory::new()->make(),
            'prebookAccount' => PrebookAccountInSupplierInvoiceLineDtoFactory::new()->make(),
            'prebookSubaccount' => PrebookSubaccountInSupplierInvoiceLineDtoFactory::new()->make(),
            'deferralSchedule' => $this->faker->numberBetween(1, 100),
            'deferralScheduleNbr' => $this->faker->word(),
            'deferralCode' => $this->faker->word(),
            'vatCode' => VatCodeInSupplierInvoiceLineDtoFactory::new()->make(),
            'poNumber' => $this->faker->word(),
            'poLineNr' => $this->faker->numberBetween(1, 100),
            'poReceiptNbr' => $this->faker->word(),
            'poReceiptLineNbr' => $this->faker->numberBetween(1, 100),
            'branchNumber' => BranchNumberInSupplierInvoiceLineDtoFactory::new()->make(),
            'note' => $this->faker->word(),
            'splitHierarchy' => $this->faker->word(),
            'project' => ProjectInSupplierInvoiceLineDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInSupplierInvoiceLineDtoFactory::new()->make(),
            'attachments' => [],
            'retainagePct' => $this->faker->randomFloat(2, 0, 1000),
            'curyRetainageAmt' => $this->faker->randomFloat(2, 0, 1000),
            'termStartDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'termEndDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceLineDto::class;
    }
}
