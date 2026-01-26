<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\TaskDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaskDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'taskId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'plannedStart' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'plannedEnd' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branch' => $this->faker->word(),
            'rateTable' => $this->faker->word(),
            'status' => $this->faker->word(),
            'restrictEmployees' => $this->faker->boolean(),
            'visibility' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'employees' => [],
            'attributes' => [],
        ];
    }

    protected function modelClass(): string
    {
        return TaskDto::class;
    }
}
