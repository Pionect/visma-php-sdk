<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerInvoiceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerInvoiceUpdateDto>
 */
class CustomerInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'paymentMethodId' => $this->faker->uuid(),
            'creditTermsId' => $this->faker->uuid(),
            'currencyId' => $this->faker->uuid(),
            'customerRefNumber' => $this->faker->word(),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'documentDueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'externalReference' => $this->faker->word(),
            'customerProject' => $this->faker->word(),
            'exchangeRate' => null,
            'domesticServicesDeductibleDocument' => $this->faker->boolean(),
            'rotRutDetails' => RotRutUpdateDtoFactory::new()->make(),
            'paymentReference' => $this->faker->word(),
            'contact' => $this->faker->numberBetween(1, 100),
            'project' => $this->faker->word(),
            'taxDetailLines' => [],
            'invoiceLines' => [],
            'sendToAutoInvoice' => $this->faker->boolean(),
            'customerVatZoneId' => $this->faker->uuid(),
            'billingAddress' => SalesInvoiceAddressUpdateDtoFactory::new()->make(),
            'invoiceContact' => SalesInvoiceContactUpdateDtoFactory::new()->make(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'accountingCostRef' => $this->faker->word(),
            'originatorDocRef' => $this->faker->word(),
            'contractDocRef' => $this->faker->word(),
            'revoked' => $this->faker->boolean(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'directDebitMandateId' => $this->faker->uuid(),
            'excludeDebtCollection' => $this->faker->boolean(),
            'debtCollectionCaseNbr' => $this->faker->word(),
            'debtCollectionCaseStatus' => $this->faker->word(),
            'debtCollectionCaseType' => $this->faker->word(),
            'debtCollectionCaseUrl' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'customerNumber' => $this->faker->word(),
            'childCustomerNumber' => $this->faker->word(),
            'consolidateInvoices' => $this->faker->boolean(),
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'hold' => $this->faker->boolean(),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
            'locationId' => $this->faker->uuid(),
            'salesPersonId' => $this->faker->numberBetween(1, 1000),
            'salesperson' => $this->faker->word(),
            'note' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'dontPrint' => $this->faker->boolean(),
            'dontEmail' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInvoiceUpdateDto::class;
    }
}
