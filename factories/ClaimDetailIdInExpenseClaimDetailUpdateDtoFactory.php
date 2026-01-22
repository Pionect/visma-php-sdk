<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ClaimDetailIdInExpenseClaimDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ClaimDetailIdInExpenseClaimDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return ClaimDetailIdInExpenseClaimDetailUpdateDto::class;
    }
}
