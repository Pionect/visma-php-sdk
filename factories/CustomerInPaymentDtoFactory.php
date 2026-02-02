<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInPaymentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInPaymentDtoFactory extends Factory
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
        return CustomerInPaymentDto::class;
    }
}
