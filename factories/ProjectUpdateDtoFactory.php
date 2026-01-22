<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'projectId' => $this->faker->word(),
            'internalId' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'hold' => $this->faker->word(),
            'template' => $this->faker->word(),
            'status' => $this->faker->word(),
            'defAccount' => $this->faker->word(),
            'defSub' => [],
            'defAccrualAccount' => $this->faker->word(),
            'defAccrualSub' => [],
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'billingPeriod' => $this->faker->word(),
            'allocationRule' => $this->faker->word(),
            'billingRule' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'rateTable' => $this->faker->word(),
            'projectManger' => $this->faker->word(),
            'projectManagerInternalId' => $this->faker->word(),
            'autoAllocate' => $this->faker->word(),
            'automaticReleaseArDoc' => $this->faker->word(),
            'restricEmployees' => $this->faker->word(),
            'restricEquipment' => $this->faker->word(),
            'customerLocation' => $this->faker->word(),
            'visibility' => $this->faker->word(),
            'tasks' => [],
            'employees' => [],
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectUpdateDto::class;
    }
}
