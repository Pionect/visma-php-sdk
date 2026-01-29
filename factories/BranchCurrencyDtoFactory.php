<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchCurrencyDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchCurrencyDtoFactory extends Factory
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
        return BranchCurrencyDto::class;
    }
}
