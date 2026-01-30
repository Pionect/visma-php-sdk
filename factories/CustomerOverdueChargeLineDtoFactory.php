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
            'quantity' => null,
            'unitPrice' => null,
            'unitPriceInCurrency' => null,
            'manualAmount' => null,
            'manualAmountInCurrency' => null,
            'amount' => null,
            'cost' => null,
            'amountInCurrency' => null,
            'account' => null,
            'vatCode' => null,
            'uom' => $this->faker->word(),
            'discountPercent' => null,
            'discountAmount' => null,
            'discountAmountInCurrency' => null,
            'manualDiscount' => $this->faker->boolean(),
            'subaccount' => null,
            'salesperson' => $this->faker->word(),
            'seller' => null,
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
