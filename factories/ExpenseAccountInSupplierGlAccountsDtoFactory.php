<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseAccountInSupplierGlAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseAccountInSupplierGlAccountsDtoFactory extends Factory
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
        return ExpenseAccountInSupplierGlAccountsDto::class;
    }
}
