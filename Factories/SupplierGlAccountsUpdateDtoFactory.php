<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierGlAccountsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierGlAccountsUpdateDto>
 */
class SupplierGlAccountsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'supplierAccount' => $this->faker->word(),
            'supplierSubaccount' => $this->faker->word(),
            'expenseAccount' => $this->faker->word(),
            'expenseAccountNonTax' => $this->faker->word(),
            'expenseEuaccount' => $this->faker->word(),
            'expenseAccountImport' => $this->faker->word(),
            'expenseSubaccount' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierGlAccountsUpdateDto::class;
    }
}
