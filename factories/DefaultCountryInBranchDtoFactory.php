<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultCountryInBranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultCountryInBranchDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DefaultCountryInBranchDto::class;
    }
}
