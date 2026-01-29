<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerDebitNoteUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDebitNoteUpdateDtoFactory extends Factory
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
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'domesticServicesDeductibleDocument' => $this->faker->boolean(),
            'paymentReference' => $this->faker->word(),
            'contact' => $this->faker->numberBetween(1, 100),
            'rotRutDetails' => RotRutUpdateDtoFactory::new()->make(),
            'taxDetailLines' => [],
            'lines' => [],
            'customerVatZoneId' => $this->faker->uuid(),
            'invoiceAddress' => SalesInvoiceAddressUpdateDtoFactory::new()->make(),
            'invoiceContact' => SalesInvoiceContactUpdateDtoFactory::new()->make(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'referenceNumber' => $this->faker->word(),
            'customerNumber' => $this->faker->word(),
            'childCustomerNumber' => $this->faker->word(),
            'consolidateInvoices' => $this->faker->boolean(),
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'hold' => $this->faker->boolean(),
            'postPeriod' => PostPeriodInCustomerDebitNoteUpdateDtoFactory::new()->make(),
            'financialPeriod' => FinancialPeriodInCustomerDebitNoteUpdateDtoFactory::new()->make(),
            'invoiceText' => $this->faker->word(),
            'locationId' => $this->faker->uuid(),
            'salesPersonId' => SalesPersonIDInCustomerDebitNoteUpdateDtoFactory::new()->make(),
            'salesperson' => SalespersonInCustomerDebitNoteUpdateDtoFactory::new()->make(),
            'note' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'dontPrint' => $this->faker->boolean(),
            'dontEmail' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDebitNoteUpdateDto::class;
    }
}
