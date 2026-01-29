<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\TimeCardSummaryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TimeCardSummaryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'lineId' => $this->faker->uuid(),
            'earningType' => EarningTypeInTimeCardSummaryDtoFactory::new()->make(),
            'project' => ProjectInTimeCardSummaryDtoFactory::new()->make(),
            'mon' => $this->faker->numberBetween(1, 100),
            'tue' => $this->faker->numberBetween(1, 100),
            'wed' => $this->faker->numberBetween(1, 100),
            'thu' => $this->faker->numberBetween(1, 100),
            'fri' => $this->faker->numberBetween(1, 100),
            'sat' => $this->faker->numberBetween(1, 100),
            'sun' => $this->faker->numberBetween(1, 100),
            'invoiceable' => $this->faker->boolean(),
            'projectTask' => ProjectTaskInTimeCardSummaryDtoFactory::new()->make(),
            'timeSpent' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'approvalStatus' => $this->faker->word(),
            'approver' => $this->faker->word(),
            'approvalStatusText' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardSummaryDto::class;
    }
}
