<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerInvoiceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'paymentMethodId' => $this->faker->word(),
            'creditTermsId' => $this->faker->word(),
            'currencyId' => $this->faker->word(),
            'customerRefNumber' => $this->faker->word(),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'documentDueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'externalReference' => $this->faker->word(),
            'customerProject' => $this->faker->word(),
            'exchangeRate' => $this->faker->word(),
            'domesticServicesDeductibleDocument' => $this->faker->word(),
            'rotRutDetails' => $this->faker->word(),
            'paymentReference' => $this->faker->word(),
            'contact' => $this->faker->word(),
            'project' => $this->faker->word(),
            'taxDetailLines' => [],
            'invoiceLines' => [],
            'sendToAutoInvoice' => $this->faker->word(),
            'customerVatZoneId' => $this->faker->word(),
            'billingAddress' => $this->faker->word(),
            'invoiceContact' => $this->faker->word(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'accountingCostRef' => $this->faker->word(),
            'originatorDocRef' => $this->faker->word(),
            'contractDocRef' => $this->faker->word(),
            'revoked' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->word(),
            'directDebitMandateId' => $this->faker->word(),
            'excludeDebtCollection' => $this->faker->word(),
            'debtCollectionCaseNbr' => $this->faker->word(),
            'debtCollectionCaseStatus' => $this->faker->word(),
            'debtCollectionCaseType' => $this->faker->word(),
            'debtCollectionCaseUrl' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'customerNumber' => $this->faker->word(),
            'childCustomerNumber' => $this->faker->word(),
            'consolidateInvoices' => $this->faker->word(),
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'hold' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
            'locationId' => $this->faker->word(),
            'salesPersonId' => $this->faker->word(),
            'salesperson' => $this->faker->word(),
            'note' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'dontPrint' => $this->faker->word(),
            'dontEmail' => $this->faker->safeEmail(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInvoiceUpdateDto::class;
    }
}
