<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DescriptionInExpenseClaimDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DescriptionInExpenseClaimDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DescriptionInExpenseClaimDetailUpdateDto::class;
    }
}
