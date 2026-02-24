<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\TaskUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Enums\TaskStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\TaskUpdateDto>
 */
class TaskUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'taskId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'plannedStart' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'plannedEnd' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'rateTable' => number_format($this->faker->randomFloat(2, 50, 150), 2, '.', ''),
            'status' => $this->faker->randomElement(TaskStatusEnum::cases()),
            'restrictEmployees' => $this->faker->boolean(),
            'employees' => [],
        ];
    }

    protected function modelClass(): string
    {
        return TaskUpdateDto::class;
    }
}
