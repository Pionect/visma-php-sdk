<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'receiptId' => $this->faker->uuid(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'taxTotal' => $this->faker->randomFloat(2, 0, 1000),
            'currency' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'inventory' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'totalAmount' => $this->faker->randomFloat(2, 0, 1000),
            'employeePart' => $this->faker->randomFloat(2, 0, 1000),
            'claimAmount' => $this->faker->randomFloat(2, 0, 1000),
            'status' => $this->faker->word(),
            'claimedBy' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'expenseClaim' => $this->faker->word(),
            'invoiceable' => $this->faker->boolean(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'expenseAccount' => $this->faker->word(),
            'expenseSub' => $this->faker->word(),
            'salesAccount' => $this->faker->word(),
            'salesSub' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'image' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseReceiptDto::class;
    }
}
