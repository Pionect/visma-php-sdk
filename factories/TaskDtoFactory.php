<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaskDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaskDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return TaskDto::class;
    }
}
