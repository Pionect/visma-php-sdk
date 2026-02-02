<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatRegistrationIdInSalesOrderBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatRegistrationIdInSalesOrderBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatRegistrationIdInSalesOrderBasicUpdateDto::class;
    }
}
