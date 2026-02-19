<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\TaskExtendedDto;
use Pionect\VismaSdk\Enums\TaskStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaskExtendedDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'projectInternalId' => $this->faker->numberBetween(1, 1000),
            'defAccount' => null,
            'defSub' => null,
            'defAccrualAccount' => null,
            'defAccrualSub' => null,
            'taxCategory' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'taskId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'plannedStart' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'plannedEnd' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branch' => null,
            'rateTable' => null,
            'status' => $this->faker->randomElement(TaskStatusEnum::cases()),
            'restrictEmployees' => $this->faker->boolean(),
            'visibility' => null,
            'timeStamp' => $this->faker->word(),
            'employees' => [],
            'attributes' => [],
        ];
    }

    protected function modelClass(): string
    {
        return TaskExtendedDto::class;
    }
}
