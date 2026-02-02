<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ChildRecordDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ChildRecordDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return ChildRecordDto::class;
    }
}
