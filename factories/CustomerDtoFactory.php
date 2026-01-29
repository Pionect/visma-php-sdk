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
            'mainAddress' => MainAddressInCustomerDtoFactory::new()->make(),
            'mainContact' => MainContactInCustomerDtoFactory::new()->make(),
            'accountReference' => $this->faker->word(),
            'parentRecord' => ParentRecordDtoFactory::new()->make(),
            'customerClass' => CustomerClassInCustomerDtoFactory::new()->make(),
            'creditTerms' => CreditTermsInCustomerDtoFactory::new()->make(),
            'currencyId' => $this->faker->uuid(),
            'creditVerification' => $this->faker->word(),
            'creditLimit' => $this->faker->randomFloat(2, 0, 1000),
            'creditDaysPastDue' => $this->faker->numberBetween(1, 100),
            'invoiceAddress' => InvoiceAddressInCustomerDtoFactory::new()->make(),
            'invoiceContact' => InvoiceContactInCustomerDtoFactory::new()->make(),
            'printInvoices' => $this->faker->boolean(),
            'acceptAutoInvoices' => $this->faker->boolean(),
            'sendInvoicesByEmail' => $this->faker->boolean(),
            'sendDunningLettersViaEmail' => $this->faker->boolean(),
            'printDunningLetters' => $this->faker->boolean(),
            'printStatements' => $this->faker->boolean(),
            'sendStatementsByEmail' => $this->faker->boolean(),
            'printMultiCurrencyStatements' => $this->faker->boolean(),
            'statementType' => $this->faker->word(),
            'deliveryAddress' => DeliveryAddressInCustomerDtoFactory::new()->make(),
            'deliveryContact' => DeliveryContactInCustomerDtoFactory::new()->make(),
            'vatRegistrationId' => $this->faker->uuid(),
            'corporateId' => $this->faker->uuid(),
            'gln' => $this->faker->word(),
            'vatZone' => VatZoneInCustomerDtoFactory::new()->make(),
            'location' => LocationInCustomerDtoFactory::new()->make(),
            'attributes' => [],
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'directDebitLines' => [],
            'priceClass' => PriceClassInCustomerDtoFactory::new()->make(),
            'glAccounts' => GlAccountsInCustomerDtoFactory::new()->make(),
            'invoiceToDefaultLocation' => $this->faker->boolean(),
            'eInvoiceContract' => EInvoiceContractInCustomerDtoFactory::new()->make(),
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
