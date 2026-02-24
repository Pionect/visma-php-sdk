<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectDto;
use Pionect\VismaSdk\Enums\ProjectBillingPeriodEnum;
use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ProjectDto>
 */
class ProjectDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'projectId' => $this->faker->uuid(),
            'customer' => null,
            'hold' => $this->faker->boolean(),
            'status' => $this->faker->randomElement(TemplateNumberDescriptionStatusEnum::cases()),
            'template' => null,
            'description' => $this->faker->sentence(),
            'assets' => null,
            'liability' => null,
            'income' => null,
            'expenses' => null,
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'projectManager' => null,
            'restrictEmployees' => $this->faker->boolean(),
            'restrictEquipment' => $this->faker->boolean(),
            'visibility' => null,
            'defAccount' => null,
            'defSub' => null,
            'defAccrualAccount' => null,
            'defAccrualSub' => null,
            'billingPeriod' => $this->faker->randomElement(ProjectBillingPeriodEnum::cases()),
            'nextBillingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastBillingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'customerLocation' => null,
            'allocationRule' => null,
            'billingRule' => null,
            'branch' => null,
            'rateTable' => null,
            'autoAllocate' => $this->faker->boolean(),
            'automaticReleaseAr' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'tasks' => [],
            'employees' => [],
            'publicId' => $this->faker->uuid(),
            'systemTemplate' => $this->faker->boolean(),
            'timeStamp' => $this->faker->word(),
            'attributes' => [],
            'note' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectDto::class;
    }
}
