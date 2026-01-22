<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchNumberInSalesOrderDto::class;
    }
}
