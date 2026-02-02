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
            'currencyId' => $this->faker->uuid(),
            'customerRefNumber' => $this->faker->word(),
            'externalReference' => $this->faker->word(),
            'contact' => $this->faker->numberBetween(1, 100),
            'invoiceLines' => [],
            'referenceNumber' => $this->faker->word(),
            'customerNumber' => $this->faker->word(),
            'childCustomerNumber' => $this->faker->word(),
            'consolidateInvoices' => $this->faker->boolean(),
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'hold' => $this->faker->boolean(),
            'postPeriod' => null,
            'financialPeriod' => null,
            'invoiceText' => $this->faker->word(),
            'locationId' => $this->faker->uuid(),
            'salesPersonId' => null,
            'salesperson' => null,
            'note' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'dontPrint' => $this->faker->boolean(),
            'dontEmail' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CreditNoteUpdateDto::class;
    }
}
