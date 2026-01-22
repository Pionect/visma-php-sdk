<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerLocationInProjectDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerLocationInProjectDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerLocationInProjectDto::class;
    }
}
