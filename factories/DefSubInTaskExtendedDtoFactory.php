<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefSubInTaskExtendedDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefSubInTaskExtendedDtoFactory extends Factory
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
        return DefSubInTaskExtendedDto::class;
    }
}
