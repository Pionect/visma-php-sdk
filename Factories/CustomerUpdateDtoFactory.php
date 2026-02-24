<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerUpdateDto;
use Pionect\VismaSdk\Enums\CustomerCreditVerificationEnum;
use Pionect\VismaSdk\Enums\CustomerStatementTypeEnum;
use Pionect\VismaSdk\Enums\CustomerStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerUpdateDto>
 */
class CustomerUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
            'status' => $this->faker->randomElement(CustomerStatusEnum::cases()),
            'accountReference' => $this->faker->word(),
            'numberOfEmployees' => $this->faker->numberBetween(1, 100),
            'parentRecordNumber' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'creditLimit' => null,
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
            'creditVerification' => $this->faker->randomElement(CustomerCreditVerificationEnum::cases()),
            'invoiceAddress' => AddressUpdateDtoFactory::new()->make(),
            'invoiceContact' => ContactInfoUpdateDtoFactory::new()->make(),
            'statementType' => $this->faker->randomElement(CustomerStatementTypeEnum::cases()),
            'deliveryAddress' => AddressUpdateDtoFactory::new()->make(),
            'deliveryContact' => ContactInfoUpdateDtoFactory::new()->make(),
            'priceClassId' => $this->faker->uuid(),
            'eInvoiceContract' => null,
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
