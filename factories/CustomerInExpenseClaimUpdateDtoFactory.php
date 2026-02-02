<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInExpenseClaimUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInExpenseClaimUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInExpenseClaimUpdateDto::class;
    }
}
