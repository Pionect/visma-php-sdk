<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FobPointInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FobPointInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return FobPointInSalesOrderDto::class;
    }
}
