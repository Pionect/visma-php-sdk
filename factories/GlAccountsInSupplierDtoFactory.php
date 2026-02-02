<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GlAccountsInSupplierDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GlAccountsInSupplierDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'supplierAccount' => null,
            'supplierSubaccount' => null,
            'expenseAccount' => null,
            'expenseAccountNonTax' => null,
            'expenseEuaccount' => null,
            'expenseAccountImport' => null,
            'expenseSubaccount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return GlAccountsInSupplierDto::class;
    }
}
