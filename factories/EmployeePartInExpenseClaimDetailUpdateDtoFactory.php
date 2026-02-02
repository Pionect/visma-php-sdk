<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EmployeePartInExpenseClaimDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeePartInExpenseClaimDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return EmployeePartInExpenseClaimDetailUpdateDto::class;
    }
}
