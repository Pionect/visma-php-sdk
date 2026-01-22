<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefAccrualSubInTaskExtendedDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefAccrualSubInTaskExtendedDtoFactory extends Factory
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
        return DefAccrualSubInTaskExtendedDto::class;
    }
}
