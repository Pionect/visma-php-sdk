<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerDebitNoteLinesUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDebitNoteLinesUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'discountCode' => $this->faker->word(),
            'domesticServicesDeductible' => $this->faker->word(),
            'itemType' => $this->faker->word(),
            'typeOfWork' => $this->faker->word(),
            'operation' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->word(),
            'unitPriceInCurrency' => $this->faker->word(),
            'manualAmountInCurrency' => $this->faker->word(),
            'accountNumber' => $this->faker->word(),
            'vatCodeId' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'discountPercent' => $this->faker->word(),
            'discountAmountInCurrency' => $this->faker->word(),
            'manualDiscount' => $this->faker->word(),
            'subaccount' => [],
            'salesperson' => $this->faker->word(),
            'deferralSchedule' => $this->faker->word(),
            'deferralCode' => $this->faker->word(),
            'termStartDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'termEndDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDebitNoteLinesUpdateDto::class;
    }
}
