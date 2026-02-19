<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerDto;
use Pionect\VismaSdk\Enums\CustomerCreditVerificationEnum;
use Pionect\VismaSdk\Enums\CustomerStatementTypeEnum;
use Pionect\VismaSdk\Enums\CustomerStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
            'status' => $this->faker->randomElement(CustomerStatusEnum::cases()),
            'mainAddress' => null,
            'mainContact' => null,
            'accountReference' => $this->faker->word(),
            'parentRecord' => ParentRecordDtoFactory::new()->make(),
            'customerClass' => null,
            'creditTerms' => null,
            'currencyId' => $this->faker->uuid(),
            'creditVerification' => $this->faker->randomElement(CustomerCreditVerificationEnum::cases()),
            'creditLimit' => null,
            'creditDaysPastDue' => $this->faker->numberBetween(1, 100),
            'invoiceAddress' => null,
            'invoiceContact' => null,
            'printInvoices' => $this->faker->boolean(),
            'acceptAutoInvoices' => $this->faker->boolean(),
            'sendInvoicesByEmail' => $this->faker->boolean(),
            'sendDunningLettersViaEmail' => $this->faker->boolean(),
            'printDunningLetters' => $this->faker->boolean(),
            'printStatements' => $this->faker->boolean(),
            'sendStatementsByEmail' => $this->faker->boolean(),
            'printMultiCurrencyStatements' => $this->faker->boolean(),
            'statementType' => $this->faker->randomElement(CustomerStatementTypeEnum::cases()),
            'deliveryAddress' => null,
            'deliveryContact' => null,
            'vatRegistrationId' => $this->faker->uuid(),
            'corporateId' => $this->faker->uuid(),
            'gln' => $this->faker->word(),
            'vatZone' => null,
            'location' => null,
            'attributes' => [],
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'directDebitLines' => [],
            'priceClass' => null,
            'glAccounts' => null,
            'invoiceToDefaultLocation' => $this->faker->boolean(),
            'eInvoiceContract' => null,
            'paymentMethods' => [],
            'defaultPaymentMethodId' => $this->faker->uuid(),
            'numberOfEmployees' => $this->faker->numberBetween(1, 100),
            'excludeDebtCollection' => $this->faker->boolean(),
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDto::class;
    }
}
