<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerPaymentMethodDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerPaymentMethodDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'detailId' => $this->faker->word(),
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerPaymentMethodDetailUpdateDto::class;
    }
}
