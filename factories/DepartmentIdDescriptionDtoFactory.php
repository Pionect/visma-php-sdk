<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DepartmentIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DepartmentIdDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DepartmentIdDescriptionDto::class;
    }
}
