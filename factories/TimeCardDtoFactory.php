<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\TimeCardDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TimeCardDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNbr' => $this->faker->word(),
            'status' => $this->faker->word(),
            'approvalStatus' => $this->faker->word(),
            'week' => null,
            'employee' => null,
            'type' => $this->faker->word(),
            'origRefNbr' => $this->faker->word(),
            'timeSpent' => $this->faker->numberBetween(1, 100),
            'invoiceable' => $this->faker->numberBetween(1, 100),
            'overtimeSpent' => $this->faker->numberBetween(1, 100),
            'invoiceableOvertime' => $this->faker->numberBetween(1, 100),
            'totalTimeSpent' => $this->faker->numberBetween(1, 100),
            'invoiceableTotalTime' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'summary' => [],
            'materials' => [],
            'approvalStatusText' => $this->faker->word(),
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardDto::class;
    }
}
