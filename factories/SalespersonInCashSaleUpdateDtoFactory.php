<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalespersonInCashSaleUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalespersonInCashSaleUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalespersonInCashSaleUpdateDto::class;
    }
}
