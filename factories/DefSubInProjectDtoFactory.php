<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefSubInProjectDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefSubInProjectDtoFactory extends Factory
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
        return DefSubInProjectDto::class;
    }
}
