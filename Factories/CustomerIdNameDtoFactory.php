<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerIdNameDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerIdNameDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerIdNameDto::class;
    }
}
