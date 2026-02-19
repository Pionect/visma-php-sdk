<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseReceiptQueryParameters;
use Pionect\VismaSdk\Enums\ExpenseReceiptQueryParametersStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseReceiptQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'date' => $this->faker->word(),
            'dateCondition' => $this->faker->word(),
            'inventory' => $this->faker->word(),
            'project' => $this->faker->word(),
            'claimedBy' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'invoiceable' => $this->faker->boolean(),
            'status' => $this->faker->randomElement(ExpenseReceiptQueryParametersStatusEnum::cases()),
            'customer' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseReceiptQueryParameters::class;
    }
}
