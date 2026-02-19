<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TemplateInProjectDto;
use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TemplateInProjectDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(TemplateNumberDescriptionStatusEnum::cases()),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TemplateInProjectDto::class;
    }
}
