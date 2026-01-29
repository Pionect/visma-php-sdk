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
            'customer' => CustomerInProjectDtoFactory::new()->make(),
            'hold' => $this->faker->boolean(),
            'status' => $this->faker->word(),
            'template' => TemplateInProjectDtoFactory::new()->make(),
            'description' => $this->faker->sentence(),
            'assets' => $this->faker->randomFloat(2, 0, 1000),
            'liability' => $this->faker->randomFloat(2, 0, 1000),
            'income' => $this->faker->randomFloat(2, 0, 1000),
            'expenses' => $this->faker->randomFloat(2, 0, 1000),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'projectManager' => ProjectManagerInProjectDtoFactory::new()->make(),
            'restrictEmployees' => $this->faker->boolean(),
            'restrictEquipment' => $this->faker->boolean(),
            'visibility' => VisibilityInProjectDtoFactory::new()->make(),
            'defAccount' => DefAccountInProjectDtoFactory::new()->make(),
            'defSub' => DefSubInProjectDtoFactory::new()->make(),
            'defAccrualAccount' => DefAccrualAccountInProjectDtoFactory::new()->make(),
            'defAccrualSub' => DefAccrualSubInProjectDtoFactory::new()->make(),
            'billingPeriod' => $this->faker->word(),
            'nextBillingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastBillingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'customerLocation' => CustomerLocationInProjectDtoFactory::new()->make(),
            'allocationRule' => AllocationRuleInProjectDtoFactory::new()->make(),
            'billingRule' => BillingRuleInProjectDtoFactory::new()->make(),
            'branch' => BranchInProjectDtoFactory::new()->make(),
            'rateTable' => RateTableInProjectDtoFactory::new()->make(),
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
        ];
    }

    protected function modelClass(): string
    {
        return ProjectDto::class;
    }
}
