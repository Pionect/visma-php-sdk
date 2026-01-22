<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefAccrualAccountInProjectDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefAccrualAccountInProjectDtoFactory extends Factory
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
        return DefAccrualAccountInProjectDto::class;
    }
}
