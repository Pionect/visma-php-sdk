<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaskExtendedDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaskExtendedDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return TaskExtendedDto::class;
    }
}
