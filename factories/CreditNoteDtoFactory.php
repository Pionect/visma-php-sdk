<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CreditNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'externalReference' => $this->faker->word(),
            'contact' => ContactIdNameDtoFactory::new()->make(),
            'attachments' => [],
            'invoiceLines' => [],
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
            'salesPerson' => SalesPersonInCreditNoteDtoFactory::new()->make(),
            'paymentReference' => $this->faker->word(),
            'invoiceAddress' => InvoiceAddressInCreditNoteDtoFactory::new()->make(),
            'invoiceContact' => InvoiceContactInCreditNoteDtoFactory::new()->make(),
            'applications' => [],
            'dontPrint' => $this->faker->boolean(),
            'dontEmail' => $this->faker->boolean(),
            'revoked' => $this->faker->boolean(),
            'customer' => CustomerInCreditNoteDtoFactory::new()->make(),
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
            'paymentMethod' => PaymentMethodInCreditNoteDtoFactory::new()->make(),
            'customerRefNumber' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'vatTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'location' => LocationInCreditNoteDtoFactory::new()->make(),
            'branchNumber' => BranchNumberInCreditNoteDtoFactory::new()->make(),
            'cashAccount' => $this->faker->word(),
            'project' => ProjectInCreditNoteDtoFactory::new()->make(),
            'account' => AccountInCreditNoteDtoFactory::new()->make(),
            'subaccount' => SubaccountInCreditNoteDtoFactory::new()->make(),
            'customerProject' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CreditNoteDto::class;
    }
}
