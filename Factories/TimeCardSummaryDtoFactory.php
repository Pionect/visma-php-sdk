<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\TimeCardSummaryDto;
use Pionect\VismaSdk\Enums\TimeCardSummaryApprovalStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\TimeCardSummaryDto>
 */
class TimeCardSummaryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'lineId' => $this->faker->uuid(),
            'earningType' => null,
            'project' => null,
            'mon' => $this->faker->numberBetween(1, 100),
            'tue' => $this->faker->numberBetween(1, 100),
            'wed' => $this->faker->numberBetween(1, 100),
            'thu' => $this->faker->numberBetween(1, 100),
            'fri' => $this->faker->numberBetween(1, 100),
            'sat' => $this->faker->numberBetween(1, 100),
            'sun' => $this->faker->numberBetween(1, 100),
            'invoiceable' => $this->faker->boolean(),
            'projectTask' => null,
            'timeSpent' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->sentence(),
            'approvalStatus' => $this->faker->randomElement(TimeCardSummaryApprovalStatusEnum::cases()),
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
