<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
            'status' => $this->faker->word(),
            'mainAddress' => $this->faker->word(),
            'mainContact' => $this->faker->word(),
            'accountReference' => $this->faker->word(),
            'parentRecord' => $this->faker->word(),
            'customerClass' => $this->faker->word(),
            'creditTerms' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'creditVerification' => $this->faker->word(),
            'creditLimit' => $this->faker->randomFloat(2, 0, 1000),
            'creditDaysPastDue' => $this->faker->numberBetween(1, 100),
            'invoiceAddress' => $this->faker->word(),
            'invoiceContact' => $this->faker->word(),
            'printInvoices' => $this->faker->boolean(),
            'acceptAutoInvoices' => $this->faker->boolean(),
            'sendInvoicesByEmail' => $this->faker->boolean(),
            'sendDunningLettersViaEmail' => $this->faker->boolean(),
            'printDunningLetters' => $this->faker->boolean(),
            'printStatements' => $this->faker->boolean(),
            'sendStatementsByEmail' => $this->faker->boolean(),
            'printMultiCurrencyStatements' => $this->faker->boolean(),
            'statementType' => $this->faker->word(),
            'deliveryAddress' => $this->faker->word(),
            'deliveryContact' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->uuid(),
            'corporateId' => $this->faker->uuid(),
            'gln' => $this->faker->word(),
            'vatZone' => $this->faker->word(),
            'location' => $this->faker->word(),
            'attributes' => [],
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'directDebitLines' => [],
            'priceClass' => $this->faker->word(),
            'glAccounts' => $this->faker->word(),
            'invoiceToDefaultLocation' => $this->faker->boolean(),
            'eInvoiceContract' => $this->faker->word(),
            'paymentMethods' => [],
            'defaultPaymentMethodId' => $this->faker->uuid(),
            'numberOfEmployees' => $this->faker->numberBetween(1, 100),
            'excludeDebtCollection' => $this->faker->boolean(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDto::class;
    }
}
