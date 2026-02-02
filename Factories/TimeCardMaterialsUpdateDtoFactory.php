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
            'itemId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'uoM' => $this->faker->word(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'mon' => null,
            'tue' => null,
            'wed' => null,
            'thu' => null,
            'fri' => null,
            'sat' => null,
            'sun' => null,
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardMaterialsUpdateDto::class;
    }
}
