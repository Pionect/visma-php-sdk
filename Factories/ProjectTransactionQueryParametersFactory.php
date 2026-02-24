<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectTransactionQueryParameters;
use Pionect\VismaSdk\Enums\InventoryAdjustmentStatusEnum;
use Pionect\VismaSdk\Enums\JournalTransactionLineModuleEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ProjectTransactionQueryParameters>
 */
class ProjectTransactionQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'module' => $this->faker->randomElement(JournalTransactionLineModuleEnum::cases()),
            'status' => $this->faker->randomElement(InventoryAdjustmentStatusEnum::cases()),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'billable' => $this->faker->boolean(),
            'branch' => $this->faker->word(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'fromPeriod' => $this->faker->word(),
            'toPeriod' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'expandNote' => $this->faker->boolean(),
            'greaterThanValue' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => $this->faker->word(),
            'createdDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTransactionQueryParameters::class;
    }
}
