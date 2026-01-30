<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ContractUsageLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContractUsageLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'transactionNumber' => $this->faker->numberBetween(1, 100),
            'billed' => $this->faker->boolean(),
            'branch' => null,
            'item' => null,
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'quantity' => null,
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'type' => $this->faker->word(),
            'referenceNbr' => $this->faker->word(),
            'billingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return ContractUsageLineDto::class;
    }
}
