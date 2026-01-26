<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'projectId' => $this->faker->uuid(),
            'customer' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'status' => $this->faker->word(),
            'template' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'assets' => $this->faker->randomFloat(2, 0, 1000),
            'liability' => $this->faker->randomFloat(2, 0, 1000),
            'income' => $this->faker->randomFloat(2, 0, 1000),
            'expenses' => $this->faker->randomFloat(2, 0, 1000),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'projectManager' => $this->faker->word(),
            'restrictEmployees' => $this->faker->boolean(),
            'restrictEquipment' => $this->faker->boolean(),
            'visibility' => $this->faker->word(),
            'defAccount' => $this->faker->word(),
            'defSub' => $this->faker->word(),
            'defAccrualAccount' => $this->faker->word(),
            'defAccrualSub' => $this->faker->word(),
            'billingPeriod' => $this->faker->word(),
            'nextBillingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastBillingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'customerLocation' => $this->faker->word(),
            'allocationRule' => $this->faker->word(),
            'billingRule' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'rateTable' => $this->faker->word(),
            'autoAllocate' => $this->faker->boolean(),
            'automaticReleaseAr' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'tasks' => [],
            'employees' => [],
            'publicId' => $this->faker->uuid(),
            'systemTemplate' => $this->faker->boolean(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'attributes' => [],
            'note' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectDto::class;
    }
}
