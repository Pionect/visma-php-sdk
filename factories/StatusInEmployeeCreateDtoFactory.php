<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\StatusInEmployeeCreateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class StatusInEmployeeCreateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return StatusInEmployeeCreateDto::class;
    }
}
