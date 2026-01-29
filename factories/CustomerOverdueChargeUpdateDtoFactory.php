<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerOverdueChargeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerOverdueChargeUpdateDtoFactory extends Factory
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
            'lines' => [],
            'referenceNumber' => $this->faker->word(),
            'customerNumber' => $this->faker->word(),
            'childCustomerNumber' => $this->faker->word(),
            'consolidateInvoices' => $this->faker->boolean(),
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'hold' => $this->faker->boolean(),
            'postPeriod' => PostPeriodInCustomerOverdueChargeUpdateDtoFactory::new()->make(),
            'financialPeriod' => FinancialPeriodInCustomerOverdueChargeUpdateDtoFactory::new()->make(),
            'invoiceText' => $this->faker->word(),
            'locationId' => $this->faker->uuid(),
            'salesPersonId' => SalesPersonIDInCustomerOverdueChargeUpdateDtoFactory::new()->make(),
            'salesperson' => SalespersonInCustomerOverdueChargeUpdateDtoFactory::new()->make(),
            'note' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'dontPrint' => $this->faker->boolean(),
            'dontEmail' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerOverdueChargeUpdateDto::class;
    }
}
