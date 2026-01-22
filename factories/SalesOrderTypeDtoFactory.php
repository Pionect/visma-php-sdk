<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesOrderTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'behavior' => $this->faker->word(),
            'defaultOperation' => $this->faker->word(),
            'customerDocumentType' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderTypeDto::class;
    }
}
