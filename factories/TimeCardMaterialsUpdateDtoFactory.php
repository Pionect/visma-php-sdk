<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TimeCardMaterialsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TimeCardMaterialsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'itemId' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'uoM' => $this->faker->word(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'mon' => $this->faker->word(),
            'tue' => $this->faker->word(),
            'wed' => $this->faker->word(),
            'thu' => $this->faker->word(),
            'fri' => $this->faker->word(),
            'sat' => $this->faker->word(),
            'sun' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardMaterialsUpdateDto::class;
    }
}
