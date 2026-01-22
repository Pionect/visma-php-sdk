<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\TaskUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaskUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'taskId' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'plannedStart' => $this->faker->word(),
            'plannedEnd' => $this->faker->word(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'rateTable' => $this->faker->word(),
            'status' => $this->faker->word(),
            'restrictEmployees' => $this->faker->word(),
            'employees' => [],
        ];
    }

    protected function modelClass(): string
    {
        return TaskUpdateDto::class;
    }
}
