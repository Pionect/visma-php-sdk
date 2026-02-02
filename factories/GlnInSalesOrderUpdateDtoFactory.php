<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GlnInSalesOrderUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GlnInSalesOrderUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return GlnInSalesOrderUpdateDto::class;
    }
}
