<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\TaskDto;
use Pionect\VismaSdk\Enums\TaskStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\TaskDto>
 */
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
            'branch' => null,
            'rateTable' => RateTableIdDescriptionDtoFactory::new()->make(),
            'status' => $this->faker->randomElement(TaskStatusEnum::cases()),
            'restrictEmployees' => $this->faker->boolean(),
            'visibility' => VisibilityDtoFactory::new()->make(),
            'timeStamp' => $this->faker->word(),
            'employees' => [],
            'attributes' => [],
        ];
    }

    protected function modelClass(): string
    {
        return TaskDto::class;
    }
}
