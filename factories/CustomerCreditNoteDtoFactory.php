<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerCreditNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerCreditNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'creditTerms' => $this->faker->word(),
            'documentDueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'externalReference' => $this->faker->word(),
            'isRotRutDeductible' => $this->faker->boolean(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'dunningLetterDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dunningLetterLevel' => $this->faker->numberBetween(1, 100),
            'contact' => $this->faker->word(),
            'attachments' => [],
            'taxDetails' => [],
            'lines' => [],
            'roundingDiff' => $this->faker->randomFloat(2, 0, 1000),
            'customerVatZone' => $this->faker->word(),
            'sendToAutoInvoice' => $this->faker->boolean(),
            'childRecord' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'hold' => $this->faker->boolean(),
            'discountTotal' => $this->faker->randomFloat(2, 0, 1000),
            'discountTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'detailTotal' => $this->faker->randomFloat(2, 0, 1000),
            'detailTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'vatTaxableTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTaxableTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'salesPersonId' => $this->faker->numberBetween(1, 1000),
            'salesPersonDescr' => $this->faker->word(),
            'salesPerson' => $this->faker->word(),
            'paymentReference' => $this->faker->word(),
            'invoiceAddress' => $this->faker->word(),
            'invoiceContact' => $this->faker->word(),
            'applications' => [],
            'dontPrint' => $this->faker->boolean(),
            'dontEmail' => $this->faker->boolean(),
            'revoked' => $this->faker->boolean(),
            'customer' => $this->faker->word(),
            'documentType' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'closedFinancialPeriod' => $this->faker->word(),
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'status' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'amountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'balanceInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscount' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'paymentMethod' => $this->faker->word(),
            'customerRefNumber' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'vatTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'location' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'project' => $this->faker->word(),
            'account' => $this->faker->word(),
            'subaccount' => $this->faker->word(),
            'customerProject' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerCreditNoteDto::class;
    }
}
