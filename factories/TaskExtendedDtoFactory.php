<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\TaskExtendedDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaskExtendedDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'projectInternalId' => $this->faker->numberBetween(1, 1000),
            'defAccount' => DefAccountInTaskExtendedDtoFactory::new()->make(),
            'defSub' => DefSubInTaskExtendedDtoFactory::new()->make(),
            'defAccrualAccount' => DefAccrualAccountInTaskExtendedDtoFactory::new()->make(),
            'defAccrualSub' => DefAccrualSubInTaskExtendedDtoFactory::new()->make(),
            'taxCategory' => TaxCategoryInTaskExtendedDtoFactory::new()->make(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'taskId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'plannedStart' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'plannedEnd' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branch' => BranchInTaskExtendedDtoFactory::new()->make(),
            'rateTable' => RateTableInTaskExtendedDtoFactory::new()->make(),
            'status' => $this->faker->word(),
            'restrictEmployees' => $this->faker->boolean(),
            'visibility' => VisibilityInTaskExtendedDtoFactory::new()->make(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'employees' => [],
            'attributes' => [],
        ];
    }

    protected function modelClass(): string
    {
        return TaskExtendedDto::class;
    }
}
