<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefAccrualAccountInTaskExtendedDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefAccrualAccountInTaskExtendedDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DefAccrualAccountInTaskExtendedDto::class;
    }
}
