<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectUpdateDto;
use Pionect\VismaSdk\Enums\ProjectBillingPeriodEnum;
use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ProjectUpdateDto>
 */
class ProjectUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'projectId' => $this->faker->uuid(),
            'internalId' => $this->faker->numberBetween(1, 1000),
            'customer' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'hold' => $this->faker->boolean(),
            'template' => $this->faker->word(),
            'status' => $this->faker->randomElement(TemplateNumberDescriptionStatusEnum::cases()),
            'defAccount' => $this->faker->word(),
            'defSub' => [],
            'defAccrualAccount' => $this->faker->word(),
            'defAccrualSub' => [],
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'billingPeriod' => $this->faker->randomElement(ProjectBillingPeriodEnum::cases()),
            'allocationRule' => $this->faker->word(),
            'billingRule' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'rateTable' => number_format($this->faker->randomFloat(2, 50, 150), 2, '.', ''),
            'projectManger' => $this->faker->word(),
            'projectManagerInternalId' => $this->faker->numberBetween(1, 1000),
            'autoAllocate' => $this->faker->boolean(),
            'automaticReleaseArDoc' => $this->faker->boolean(),
            'restricEmployees' => $this->faker->boolean(),
            'restricEquipment' => $this->faker->boolean(),
            'customerLocation' => $this->faker->word(),
            'visibility' => VisibilityUpdateDtoFactory::new()->make(),
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
