<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerIdNameDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerIdNameDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerIdNameDto::class;
    }
}
