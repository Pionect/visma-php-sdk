<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\StatusInEmployeeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class StatusInEmployeeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return StatusInEmployeeUpdateDto::class;
    }
}
