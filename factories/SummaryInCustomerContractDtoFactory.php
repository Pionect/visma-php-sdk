<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SummaryInCustomerContractDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SummaryInCustomerContractDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'setupDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'activationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'terminationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'massRenewal' => $this->faker->boolean(),
            'renewalPoint' => $this->faker->numberBetween(1, 100),
            'gracePeriod' => $this->faker->numberBetween(1, 100),
            'currency' => $this->faker->word(),
            'invoicingScheduleStartsOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'invoicingPeriod' => $this->faker->word(),
            'lastInvoicingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'nextInvoicingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'invoiceTo' => $this->faker->word(),
            'invoiceAccount' => InvoiceAccountInCustomerContractSummaryDtoFactory::new()->make(),
            'invoiceLocation' => LocationNameDescriptionDtoFactory::new()->make(),
            'owner' => OwnerInCustomerContractSummaryDtoFactory::new()->make(),
            'salesPerson' => SalesPersonInCustomerContractSummaryDtoFactory::new()->make(),
            'caseCountItem' => CaseCountItemInCustomerContractSummaryDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return SummaryInCustomerContractDto::class;
    }
}
