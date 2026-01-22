<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectTransactionLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTransactionLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'tranId' => $this->faker->word(),
            'date' => $this->faker->word(),
            'inventoryId' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'billableQuantity' => $this->faker->word(),
            'unitRate' => $this->faker->word(),
            'amount' => $this->faker->word(),
            'billable' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'batchNbr' => $this->faker->word(),
            'useBillableQty' => $this->faker->word(),
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
