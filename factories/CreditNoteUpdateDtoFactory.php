<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CreditNoteUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditNoteUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'currencyId' => $this->faker->word(),
            'customerRefNumber' => $this->faker->word(),
            'externalReference' => $this->faker->word(),
            'contact' => $this->faker->word(),
            'invoiceLines' => [],
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
        return CreditNoteUpdateDto::class;
    }
}
