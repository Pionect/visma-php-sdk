<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseAccountNonTaxInSupplierGlAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseAccountNonTaxInSupplierGlAccountsDtoFactory extends Factory
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
        return ExpenseAccountNonTaxInSupplierGlAccountsDto::class;
    }
}
