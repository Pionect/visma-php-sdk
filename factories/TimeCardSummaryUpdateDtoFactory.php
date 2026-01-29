<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TimeCardSummaryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TimeCardSummaryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'earningType' => EarningTypeInTimeCardSummaryUpdateDtoFactory::new()->make(),
            'project' => ProjectInTimeCardSummaryUpdateDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInTimeCardSummaryUpdateDtoFactory::new()->make(),
            'mon' => MonInTimeCardSummaryUpdateDtoFactory::new()->make(),
            'tue' => TueInTimeCardSummaryUpdateDtoFactory::new()->make(),
            'wed' => WedInTimeCardSummaryUpdateDtoFactory::new()->make(),
            'thu' => ThuInTimeCardSummaryUpdateDtoFactory::new()->make(),
            'fri' => FriInTimeCardSummaryUpdateDtoFactory::new()->make(),
            'sat' => SatInTimeCardSummaryUpdateDtoFactory::new()->make(),
            'sun' => SunInTimeCardSummaryUpdateDtoFactory::new()->make(),
            'invoiceable' => InvoiceableInTimeCardSummaryUpdateDtoFactory::new()->make(),
            'description' => DescriptionInTimeCardSummaryUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardSummaryUpdateDto::class;
    }
}
