<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\QuantityInExpenseClaimDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class QuantityInExpenseClaimDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return QuantityInExpenseClaimDetailUpdateDto::class;
    }
}
