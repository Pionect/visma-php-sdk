<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerInvoiceLinesUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInvoiceLinesUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'discountCode' => $this->faker->word(),
            'domesticServicesDeductible' => $this->faker->boolean(),
            'itemType' => null,
            'typeOfWork' => null,
            'taskId' => $this->faker->uuid(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'operation' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->sentence(),
            'quantity' => null,
            'unitPriceInCurrency' => null,
            'manualAmountInCurrency' => null,
            'accountNumber' => $this->faker->word(),
            'vatCodeId' => $this->faker->uuid(),
            'uom' => $this->faker->word(),
            'discountPercent' => null,
            'discountAmountInCurrency' => null,
            'manualDiscount' => $this->faker->boolean(),
            'subaccount' => [],
            'salesperson' => $this->faker->word(),
            'deferralSchedule' => $this->faker->numberBetween(1, 100),
            'deferralCode' => $this->faker->word(),
            'termStartDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'termEndDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInvoiceLinesUpdateDto::class;
    }
}
