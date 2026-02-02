<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PriceClassInCustomerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PriceClassInCustomerDtoFactory extends Factory
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
        return PriceClassInCustomerDto::class;
    }
}
