<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerOverdueChargeLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerOverdueChargeLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'attachments' => [],
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryNumber' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitPrice' => $this->faker->randomFloat(2, 0, 1000),
            'unitPriceInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'manualAmount' => $this->faker->randomFloat(2, 0, 1000),
            'manualAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'cost' => $this->faker->randomFloat(2, 0, 1000),
            'amountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'account' => $this->faker->word(),
            'vatCode' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'manualDiscount' => $this->faker->boolean(),
            'subaccount' => $this->faker->word(),
            'salesperson' => $this->faker->word(),
            'seller' => $this->faker->word(),
            'deferralSchedule' => $this->faker->numberBetween(1, 100),
            'deferralCode' => $this->faker->word(),
            'discountCode' => $this->faker->word(),
            'note' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'externalLink' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerOverdueChargeLineDto::class;
    }
}
