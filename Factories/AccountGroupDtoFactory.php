<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountGroupDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AccountGroupDtoFactory extends Factory
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
        return AccountGroupDto::class;
    }
}
