<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInExpenseClaimDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInExpenseClaimDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInExpenseClaimDetailDto::class;
    }
}
