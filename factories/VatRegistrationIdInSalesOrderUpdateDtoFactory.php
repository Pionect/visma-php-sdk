<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatRegistrationIdInSalesOrderUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatRegistrationIdInSalesOrderUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatRegistrationIdInSalesOrderUpdateDto::class;
    }
}
