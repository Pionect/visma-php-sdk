<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefAccrualSubInProjectDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefAccrualSubInProjectDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DefAccrualSubInProjectDto::class;
    }
}
