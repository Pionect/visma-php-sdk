<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CurrencyInBranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CurrencyInBranchDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'symbol' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CurrencyInBranchDto::class;
    }
}
