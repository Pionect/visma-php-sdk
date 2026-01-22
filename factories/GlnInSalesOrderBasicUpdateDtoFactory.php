<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GlnInSalesOrderBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GlnInSalesOrderBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return GlnInSalesOrderBasicUpdateDto::class;
    }
}
