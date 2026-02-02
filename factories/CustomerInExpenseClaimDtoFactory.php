<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInExpenseClaimDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInExpenseClaimDtoFactory extends Factory
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
        return CustomerInExpenseClaimDto::class;
    }
}
