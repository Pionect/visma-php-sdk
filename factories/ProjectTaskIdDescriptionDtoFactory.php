<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectTaskIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTaskIdDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTaskIdDescriptionDto::class;
    }
}
