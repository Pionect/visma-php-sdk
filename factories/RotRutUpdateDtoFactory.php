<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RotRutUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class RotRutUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'distributedAutomaticaly' => $this->faker->boolean(),
            'appartment' => $this->faker->word(),
            'estate' => $this->faker->word(),
            'organizationNbr' => $this->faker->word(),
            'distribution' => [],
        ];
    }

    protected function modelClass(): string
    {
        return RotRutUpdateDto::class;
    }
}
