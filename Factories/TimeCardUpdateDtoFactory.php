<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TimeCardUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TimeCardUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNbr' => $this->faker->word(),
            'employee' => $this->faker->word(),
            'summary' => [],
            'materials' => [],
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardUpdateDto::class;
    }
}
