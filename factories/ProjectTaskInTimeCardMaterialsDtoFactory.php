<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectTaskInTimeCardMaterialsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTaskInTimeCardMaterialsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTaskInTimeCardMaterialsDto::class;
    }
}
