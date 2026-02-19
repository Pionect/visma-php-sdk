<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountInBudgetDto;
use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AccountInBudgetDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(AccountTypeEnum::cases()),
            'externalCode1' => $this->faker->word(),
            'externalCode2' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountInBudgetDto::class;
    }
}
