<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierGlAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierGlAccountsDto>
 */
class SupplierGlAccountsDtoFactory extends Factory
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
        return SupplierGlAccountsDto::class;
    }
}
