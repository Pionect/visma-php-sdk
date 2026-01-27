<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectTransactionLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTransactionLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'tranId' => $this->faker->numberBetween(1, 1000),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'inventoryId' => $this->faker->uuid(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'billableQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitRate' => $this->faker->randomFloat(2, 0, 1000),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'billable' => $this->faker->boolean(),
            'financialPeriod' => $this->faker->word(),
            'batchNbr' => $this->faker->word(),
            'useBillableQty' => $this->faker->boolean(),
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
            'location' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTransactionLineUpdateDto::class;
    }
}
