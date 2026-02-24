<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerGlAccountsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerGlAccountsUpdateDto>
 */
class CustomerGlAccountsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customerLedgerAccount' => $this->faker->word(),
            'customerLedgerSubaccount' => [],
            'salesAccount' => $this->faker->word(),
            'salesNonTaxableAccount' => $this->faker->word(),
            'salesEuAccount' => $this->faker->word(),
            'salesExportAccount' => $this->faker->word(),
            'salesSubaccount' => [],
            'discountAccount' => $this->faker->word(),
            'discountSubaccount' => [],
            'freightAccount' => $this->faker->word(),
            'freightSubaccount' => [],
            'cashDiscountAccount' => $this->faker->word(),
            'cashDiscountSubaccount' => [],
            'prepaymentAccount' => $this->faker->word(),
            'prepaymentSubaccount' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerGlAccountsUpdateDto::class;
    }
}
