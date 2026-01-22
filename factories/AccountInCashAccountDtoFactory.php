<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountInCashAccountDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AccountInCashAccountDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountInCashAccountDto::class;
    }
}
