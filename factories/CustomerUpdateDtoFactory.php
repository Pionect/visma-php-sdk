<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
            'status' => $this->faker->word(),
            'accountReference' => $this->faker->word(),
            'numberOfEmployees' => $this->faker->word(),
            'parentRecordNumber' => $this->faker->word(),
            'currencyId' => $this->faker->word(),
            'creditLimit' => $this->faker->word(),
            'creditDaysPastDue' => $this->faker->word(),
            'overrideWithClassValues' => $this->faker->boolean(),
            'customerClassId' => $this->faker->word(),
            'creditTermsId' => $this->faker->word(),
            'printInvoices' => $this->faker->word(),
            'acceptAutoInvoices' => $this->faker->word(),
            'sendInvoicesByEmail' => $this->faker->safeEmail(),
            'sendDunningLettersViaEmail' => $this->faker->safeEmail(),
            'printDunningLetters' => $this->faker->word(),
            'printStatements' => $this->faker->word(),
            'sendStatementsByEmail' => $this->faker->safeEmail(),
            'printMultiCurrencyStatements' => $this->faker->word(),
            'invoiceToDefaultLocation' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->word(),
            'corporateId' => $this->faker->word(),
            'vatZoneId' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'note' => $this->faker->word(),
            'mainAddress' => $this->faker->word(),
            'mainContact' => $this->faker->word(),
            'creditVerification' => $this->faker->word(),
            'invoiceAddress' => $this->faker->word(),
            'invoiceContact' => $this->faker->word(),
            'statementType' => $this->faker->word(),
            'deliveryAddress' => $this->faker->word(),
            'deliveryContact' => $this->faker->word(),
            'priceClassId' => $this->faker->word(),
            'eInvoiceContract' => $this->faker->word(),
            'defaultPaymentMethod' => $this->faker->word(),
            'glAccounts' => $this->faker->word(),
            'directDebitLines' => [],
            'attributeLines' => [],
            'overrideNumberSeries' => $this->faker->word(),
            'excludeDebtCollection' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerUpdateDto::class;
    }
}
