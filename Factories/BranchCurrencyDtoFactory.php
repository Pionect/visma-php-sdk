<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchCurrencyDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\BranchCurrencyDto>
 */
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
