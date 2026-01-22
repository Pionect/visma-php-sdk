<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefAccountInProjectDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefAccountInProjectDtoFactory extends Factory
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
        return DefAccountInProjectDto::class;
    }
}
