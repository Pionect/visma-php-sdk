<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseAccrualAccountInInventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseAccrualAccountInInventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseAccrualAccountInInventoryUpdateDto::class;
    }
}
