<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInProjectBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInProjectBasicDtoFactory extends Factory
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
        return CustomerInProjectBasicDto::class;
    }
}
