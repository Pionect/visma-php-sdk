<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectTaskUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTaskUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'taskId' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'plannedStart' => $this->faker->word(),
            'plannedEnd' => $this->faker->word(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'rateTable' => $this->faker->word(),
            'status' => $this->faker->word(),
            'visibility' => $this->faker->word(),
            'restrictEmployees' => $this->faker->word(),
            'employees' => [],
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTaskUpdateDto::class;
    }
}
