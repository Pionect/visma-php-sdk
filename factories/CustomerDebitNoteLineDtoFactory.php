<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerDebitNoteLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDebitNoteLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'termStartDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'termEndDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'isRotRutDeductible' => $this->faker->boolean(),
            'itemType' => $this->faker->word(),
            'typeOfWork' => $this->faker->word(),
            'deductableAmount' => $this->faker->randomFloat(2, 0, 1000),
            'attachments' => [],
            'soShipmentNbr' => $this->faker->word(),
            'soOrderType' => $this->faker->word(),
            'soOrderNbr' => $this->faker->word(),
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
        return CustomerDebitNoteLineDto::class;
    }
}
