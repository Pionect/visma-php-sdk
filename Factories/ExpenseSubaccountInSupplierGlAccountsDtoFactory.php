<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseSubaccountInSupplierGlAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseSubaccountInSupplierGlAccountsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseSubaccountInSupplierGlAccountsDto::class;
    }
}
