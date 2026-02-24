<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerContractSummaryDto;
use Pionect\VismaSdk\Enums\CustomerContractSummaryInvoiceToEnum;
use Pionect\VismaSdk\Enums\CustomerContractSummaryInvoicingPeriodEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerContractSummaryDto>
 */
class CustomerContractSummaryDtoFactory extends Factory
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
            'invoicingPeriod' => $this->faker->randomElement(CustomerContractSummaryInvoicingPeriodEnum::cases()),
            'lastInvoicingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'nextInvoicingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'invoiceTo' => $this->faker->randomElement(CustomerContractSummaryInvoiceToEnum::cases()),
            'invoiceAccount' => null,
            'invoiceLocation' => LocationNameDescriptionDtoFactory::new()->make(),
            'owner' => null,
            'salesPerson' => null,
            'caseCountItem' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractSummaryDto::class;
    }
}
