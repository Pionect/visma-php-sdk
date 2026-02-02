<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DateInInventoryIssueUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DateInInventoryIssueUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return DateInInventoryIssueUpdateDto::class;
    }
}
