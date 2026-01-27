<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerCreditNoteUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerCreditNoteUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'currencyId' => $this->faker->uuid(),
            'customerRefNumber' => $this->faker->word(),
            'externalReference' => $this->faker->word(),
            'contact' => $this->faker->numberBetween(1, 100),
            'project' => $this->faker->word(),
            'lines' => [],
            'taxDetails' => [],
            'applicationLines' => [],
            'customerVatZoneId' => $this->faker->uuid(),
            'invoiceAddress' => $this->faker->word(),
            'invoiceContact' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'sendToAutoInvoice' => $this->faker->boolean(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
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
            'salesPersonId' => $this->faker->word(),
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
        return CustomerCreditNoteUpdateDto::class;
    }
}
