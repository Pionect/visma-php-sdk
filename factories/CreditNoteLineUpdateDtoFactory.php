<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CreditNoteLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditNoteLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'discountCode' => $this->faker->word(),
            'taskId' => $this->faker->uuid(),
            'operation' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitPriceInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'manualAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'accountNumber' => $this->faker->word(),
            'vatCodeId' => $this->faker->uuid(),
            'uom' => $this->faker->word(),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
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
        return CreditNoteLineUpdateDto::class;
    }
}
