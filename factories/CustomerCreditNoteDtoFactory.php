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
            'creditTerms' => CreditTermsInCustomerCreditNoteDtoFactory::new()->make(),
            'documentDueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'externalReference' => $this->faker->word(),
            'isRotRutDeductible' => $this->faker->boolean(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'dunningLetterDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dunningLetterLevel' => $this->faker->numberBetween(1, 100),
            'contact' => ContactInCustomerCreditNoteDtoFactory::new()->make(),
            'attachments' => [],
            'taxDetails' => [],
            'lines' => [],
            'roundingDiff' => $this->faker->randomFloat(2, 0, 1000),
            'customerVatZone' => CustomerVatZoneInCustomerCreditNoteDtoFactory::new()->make(),
            'sendToAutoInvoice' => $this->faker->boolean(),
            'childRecord' => ChildRecordDtoFactory::new()->make(),
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
            'salesPerson' => SalesPersonInCustomerCreditNoteDtoFactory::new()->make(),
            'paymentReference' => $this->faker->word(),
            'invoiceAddress' => InvoiceAddressInCustomerCreditNoteDtoFactory::new()->make(),
            'invoiceContact' => InvoiceContactInCustomerCreditNoteDtoFactory::new()->make(),
            'applications' => [],
            'dontPrint' => $this->faker->boolean(),
            'dontEmail' => $this->faker->boolean(),
            'revoked' => $this->faker->boolean(),
            'customer' => CustomerInCustomerCreditNoteDtoFactory::new()->make(),
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
            'paymentMethod' => PaymentMethodInCustomerCreditNoteDtoFactory::new()->make(),
            'customerRefNumber' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'vatTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'location' => LocationInCustomerCreditNoteDtoFactory::new()->make(),
            'branchNumber' => BranchNumberInCustomerCreditNoteDtoFactory::new()->make(),
            'cashAccount' => $this->faker->word(),
            'project' => ProjectInCustomerCreditNoteDtoFactory::new()->make(),
            'account' => AccountInCustomerCreditNoteDtoFactory::new()->make(),
            'subaccount' => SubaccountInCustomerCreditNoteDtoFactory::new()->make(),
            'customerProject' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerCreditNoteDto::class;
    }
}
