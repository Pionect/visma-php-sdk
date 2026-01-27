<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTransactionLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'tranId' => $this->faker->numberBetween(1, 1000),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'inventoryId' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitRate' => $this->faker->randomFloat(2, 0, 1000),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'billable' => $this->faker->boolean(),
            'released' => $this->faker->boolean(),
            'allocated' => $this->faker->boolean(),
            'billableQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'financialPeriod' => $this->faker->word(),
            'batchNbr' => $this->faker->word(),
            'useBillableQty' => $this->faker->boolean(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'earningType' => $this->faker->word(),
            'overtimeMultiplier' => $this->faker->randomFloat(2, 0, 1000),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'debitAccount' => $this->faker->word(),
            'debitSubaccount' => $this->faker->word(),
            'creditAccount' => $this->faker->word(),
            'creditSubaccount' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'employee' => $this->faker->word(),
            'customerVendor' => $this->faker->word(),
            'accountGroup' => $this->faker->word(),
            'debitAccountGroup' => $this->faker->word(),
            'creditAccountGroup' => $this->faker->word(),
            'location' => $this->faker->word(),
            'note' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTransactionLineDto::class;
    }
}
