<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerBalanceV2dto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerBalanceV2dto>
 */
class CustomerBalanceV2dtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branchNumber' => $this->faker->word(),
            'customer' => null,
            'beginBalance' => null,
            'sales' => null,
            'paymentsAndPrepayments' => null,
            'adjustmentsAndDiscounts' => null,
            'overdueCharges' => null,
            'yearToDateBalance' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CustomerBalanceV2dto::class;
    }
}
