<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierBalanceV2dto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierBalanceV2dtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branch' => $this->faker->word(),
            'supplier' => null,
            'beginBalance' => null,
            'purchases' => null,
            'paymentsAndPrepayments' => null,
            'adjustmentsAndDiscounts' => null,
            'yearToDateBalance' => null,
        ];
    }

    protected function modelClass(): string
    {
        return SupplierBalanceV2dto::class;
    }
}
