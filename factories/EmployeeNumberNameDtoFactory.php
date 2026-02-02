<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EmployeeNumberNameDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeeNumberNameDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->uuid(),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return EmployeeNumberNameDto::class;
    }
}
