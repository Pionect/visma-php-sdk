<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'salespersonId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'isActive' => $this->faker->boolean(),
            'commissionPct' => $this->faker->randomFloat(2, 0, 1000),
            'salesSub' => $this->faker->word(),
            'customers' => [],
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonUpdateDto::class;
    }
}
