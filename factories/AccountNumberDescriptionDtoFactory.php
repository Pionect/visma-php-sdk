<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountNumberDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AccountNumberDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'externalCode1' => $this->faker->word(),
            'externalCode2' => $this->faker->word(),
            'externalCode1info' => $this->faker->word(),
            'externalCode2info' => $this->faker->word(),
            'glConsolAccountCd' => $this->faker->word(),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountNumberDescriptionDto::class;
    }
}
