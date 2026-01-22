<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UnitCostInExpenseClaimDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UnitCostInExpenseClaimDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return UnitCostInExpenseClaimDetailUpdateDto::class;
    }
}
