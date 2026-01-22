<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContractUsageLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContractUsageLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'transactionNumber' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'inventory' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'date' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ContractUsageLineUpdateDto::class;
    }
}
