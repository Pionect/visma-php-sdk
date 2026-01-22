<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseAccrualAccountInInventoryAccountInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseAccrualAccountInInventoryAccountInformationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseAccrualAccountInInventoryAccountInformationDto::class;
    }
}
