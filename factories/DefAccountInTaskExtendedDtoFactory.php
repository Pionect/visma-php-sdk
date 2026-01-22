<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefAccountInTaskExtendedDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefAccountInTaskExtendedDtoFactory extends Factory
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
        return DefAccountInTaskExtendedDto::class;
    }
}
