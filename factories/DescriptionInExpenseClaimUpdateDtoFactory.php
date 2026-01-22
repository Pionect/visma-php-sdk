<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DescriptionInExpenseClaimUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DescriptionInExpenseClaimUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DescriptionInExpenseClaimUpdateDto::class;
    }
}
