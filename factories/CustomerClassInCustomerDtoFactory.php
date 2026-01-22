<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerClassInCustomerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerClassInCustomerDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerClassInCustomerDto::class;
    }
}
