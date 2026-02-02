<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CashSaleDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashSaleDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'creditTerms' => null,
            'cashSaleLines' => [],
            'timeStamp' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'discountTotal' => null,
            'discountTotalInCurrency' => null,
            'detailTotal' => null,
            'detailTotalInCurrency' => null,
            'vatTaxableTotal' => null,
            'vatTaxableTotalInCurrency' => null,
            'vatExemptTotal' => null,
            'vatExemptTotalInCurrency' => null,
            'salesPersonId' => $this->faker->numberBetween(1, 1000),
            'salesPersonDescr' => $this->faker->word(),
            'salesPerson' => null,
            'paymentReference' => $this->faker->word(),
            'invoiceAddress' => null,
            'invoiceContact' => null,
            'applications' => [],
            'dontPrint' => $this->faker->boolean(),
            'dontEmail' => $this->faker->boolean(),
            'revoked' => $this->faker->boolean(),
            'customer' => null,
            'documentType' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'closedFinancialPeriod' => $this->faker->word(),
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'status' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'amount' => null,
            'amountInCurrency' => null,
            'balance' => null,
            'balanceInCurrency' => null,
            'cashDiscount' => null,
            'cashDiscountInCurrency' => null,
            'paymentMethod' => null,
            'customerRefNumber' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'vatTotal' => null,
            'vatTotalInCurrency' => null,
            'location' => null,
            'branchNumber' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'project' => null,
            'account' => null,
            'subaccount' => null,
            'customerProject' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CashSaleDto::class;
    }
}
