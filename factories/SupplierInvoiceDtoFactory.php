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
            'approvalDetails' => null,
            'invoiceLines' => [],
            'landedCosts' => [],
            'hold' => $this->faker->boolean(),
            'exchangeRate' => null,
            'paymentRefNo' => $this->faker->word(),
            'creditTerms' => null,
            'retainageApply' => $this->faker->boolean(),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'detailTotal' => null,
            'detailTotalInCurrency' => null,
            'discountTotal' => null,
            'discountTotalInCurrency' => null,
            'vatTaxableTotal' => null,
            'vatTaxableTotalInCurrency' => null,
            'vatExemptTotal' => null,
            'vatExemptTotalInCurrency' => null,
            'withholdingTax' => null,
            'withholdingTaxInCurrency' => null,
            'buyerReference' => $this->faker->word(),
            'roundingDiff' => null,
            'roundingDiffInCurrency' => null,
            'amount' => null,
            'vatAmount' => null,
            'taxCalculationMode' => $this->faker->word(),
            'supplierTaxZone' => null,
            'paySelected' => $this->faker->boolean(),
            'curyRetainageTotal' => null,
            'curyRetainageUnreleasedAmt' => null,
            'documentVersionNumber' => $this->faker->numberBetween(1, 100),
            'supplier' => null,
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
            'balance' => null,
            'balanceInCurrency' => null,
            'cashDiscount' => null,
            'cashDiscountInCurrency' => null,
            'paymentMethod' => null,
            'supplierReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'closedFinancialPeriod' => $this->faker->word(),
            'location' => null,
            'vatTotal' => null,
            'vatTotalInCurrency' => null,
            'branchNumber' => BranchNumberDtoFactory::new()->make(),
            'payDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'paymentMessage' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceDto::class;
    }
}
