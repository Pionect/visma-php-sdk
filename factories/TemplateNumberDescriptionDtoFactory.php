<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TemplateNumberDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TemplateNumberDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'status' => $this->faker->word(),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TemplateNumberDescriptionDto::class;
    }
}
