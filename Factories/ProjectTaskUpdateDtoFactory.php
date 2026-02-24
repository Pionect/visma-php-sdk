<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectTaskUpdateDto;
use Pionect\VismaSdk\Enums\TaskStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ProjectTaskUpdateDto>
 */
class ProjectTaskUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'taskId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'plannedStart' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'plannedEnd' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'rateTable' => number_format($this->faker->randomFloat(2, 50, 150), 2, '.', ''),
            'status' => $this->faker->randomElement(TaskStatusEnum::cases()),
            'visibility' => VisibilityUpdateDtoFactory::new()->make(),
            'restrictEmployees' => $this->faker->boolean(),
            'employees' => [],
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTaskUpdateDto::class;
    }
}
