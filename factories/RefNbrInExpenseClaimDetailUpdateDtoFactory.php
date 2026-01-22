<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RefNbrInExpenseClaimDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class RefNbrInExpenseClaimDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return RefNbrInExpenseClaimDetailUpdateDto::class;
    }
}
