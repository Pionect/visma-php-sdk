<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ProjectTransactionLineDto>
 */
class ProjectTransactionLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'tranId' => $this->faker->numberBetween(1, 1000),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'inventoryId' => null,
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'quantity' => null,
            'unitRate' => null,
            'amount' => null,
            'billable' => $this->faker->boolean(),
            'released' => $this->faker->boolean(),
            'allocated' => $this->faker->boolean(),
            'billableQuantity' => null,
            'financialPeriod' => $this->faker->word(),
            'batchNbr' => $this->faker->word(),
            'useBillableQty' => $this->faker->boolean(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'earningType' => null,
            'overtimeMultiplier' => null,
            'project' => null,
            'projectTask' => null,
            'debitAccount' => null,
            'debitSubaccount' => null,
            'creditAccount' => null,
            'creditSubaccount' => null,
            'branch' => null,
            'employee' => null,
            'customerVendor' => null,
            'accountGroup' => null,
            'debitAccountGroup' => null,
            'creditAccountGroup' => null,
            'location' => null,
            'note' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTransactionLineDto::class;
    }
}
