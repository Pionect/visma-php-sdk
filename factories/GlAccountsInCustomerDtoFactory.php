<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GlAccountsInCustomerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GlAccountsInCustomerDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customerLedgerAccount' => $this->faker->word(),
            'customerLedgerSubaccount' => $this->faker->word(),
            'salesAccount' => $this->faker->word(),
            'salesNonTaxableAccount' => $this->faker->word(),
            'salesEuAccount' => $this->faker->word(),
            'salesExportAccount' => $this->faker->word(),
            'salesSubaccount' => $this->faker->word(),
            'discountAccount' => $this->faker->word(),
            'discountSubaccount' => $this->faker->word(),
            'freightAccount' => $this->faker->word(),
            'freightSubaccount' => $this->faker->word(),
            'cashDiscountAccount' => $this->faker->word(),
            'cashDiscountSubaccount' => $this->faker->word(),
            'prepaymentAccount' => $this->faker->word(),
            'prepaymentSubaccount' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return GlAccountsInCustomerDto::class;
    }
}
