<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FinanceChargesUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinanceChargesUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'entryType' => $this->faker->word(),
            'offsetAccount' => $this->faker->word(),
            'offsetSubAccount' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'lineNbr' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return FinanceChargesUpdateDto::class;
    }
}
