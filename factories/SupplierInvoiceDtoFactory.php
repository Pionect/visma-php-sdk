<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInvoiceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'taxDetailLines' => [],
            'attachments' => [],
            'approvalDetails' => $this->faker->word(),
            'invoiceLines' => [],
            'landedCosts' => [],
            'hold' => $this->faker->boolean(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'paymentRefNo' => $this->faker->word(),
            'creditTerms' => $this->faker->word(),
            'retainageApply' => $this->faker->boolean(),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'detailTotal' => $this->faker->randomFloat(2, 0, 1000),
            'detailTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'discountTotal' => $this->faker->randomFloat(2, 0, 1000),
            'discountTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'vatTaxableTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTaxableTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'withholdingTax' => $this->faker->randomFloat(2, 0, 1000),
            'withholdingTaxInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'buyerReference' => $this->faker->word(),
            'roundingDiff' => $this->faker->randomFloat(2, 0, 1000),
            'roundingDiffInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'vatAmount' => $this->faker->randomFloat(2, 0, 1000),
            'taxCalculationMode' => $this->faker->word(),
            'supplierTaxZone' => $this->faker->word(),
            'paySelected' => $this->faker->boolean(),
            'curyRetainageTotal' => $this->faker->randomFloat(2, 0, 1000),
            'curyRetainageUnreleasedAmt' => $this->faker->randomFloat(2, 0, 1000),
            'documentVersionNumber' => $this->faker->numberBetween(1, 100),
            'supplier' => $this->faker->word(),
            'documentType' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'approvalStatus' => $this->faker->word(),
            'status' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'balanceInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscount' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'paymentMethod' => $this->faker->word(),
            'supplierReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'closedFinancialPeriod' => $this->faker->word(),
            'location' => $this->faker->word(),
            'vatTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'branchNumber' => $this->faker->word(),
            'payDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'paymentMessage' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceDto::class;
    }
}
