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
            'numberOfEmployees' => $this->faker->numberBetween(1, 100),
            'parentRecordNumber' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'creditLimit' => $this->faker->randomFloat(2, 0, 1000),
            'creditDaysPastDue' => $this->faker->numberBetween(1, 100),
            'overrideWithClassValues' => $this->faker->boolean(),
            'customerClassId' => $this->faker->uuid(),
            'creditTermsId' => $this->faker->uuid(),
            'printInvoices' => $this->faker->boolean(),
            'acceptAutoInvoices' => $this->faker->boolean(),
            'sendInvoicesByEmail' => $this->faker->boolean(),
            'sendDunningLettersViaEmail' => $this->faker->boolean(),
            'printDunningLetters' => $this->faker->boolean(),
            'printStatements' => $this->faker->boolean(),
            'sendStatementsByEmail' => $this->faker->boolean(),
            'printMultiCurrencyStatements' => $this->faker->boolean(),
            'invoiceToDefaultLocation' => $this->faker->boolean(),
            'vatRegistrationId' => $this->faker->uuid(),
            'corporateId' => $this->faker->uuid(),
            'vatZoneId' => $this->faker->uuid(),
            'gln' => $this->faker->word(),
            'note' => $this->faker->word(),
            'mainAddress' => AddressUpdateDtoFactory::new()->make(),
            'mainContact' => ContactInfoUpdateDtoFactory::new()->make(),
            'creditVerification' => $this->faker->word(),
            'invoiceAddress' => AddressUpdateDtoFactory::new()->make(),
            'invoiceContact' => ContactInfoUpdateDtoFactory::new()->make(),
            'statementType' => $this->faker->word(),
            'deliveryAddress' => AddressUpdateDtoFactory::new()->make(),
            'deliveryContact' => ContactInfoUpdateDtoFactory::new()->make(),
            'priceClassId' => $this->faker->uuid(),
            'eInvoiceContract' => EInvoiceContractUpdateDtoFactory::new()->make(),
            'defaultPaymentMethod' => CustomerDefaultPaymentMethodUpdateDtoFactory::new()->make(),
            'glAccounts' => CustomerGlAccountsUpdateDtoFactory::new()->make(),
            'directDebitLines' => [],
            'attributeLines' => [],
            'overrideNumberSeries' => $this->faker->boolean(),
            'excludeDebtCollection' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerUpdateDto::class;
    }
}
