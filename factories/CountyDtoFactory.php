<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountyDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountyDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CountyDto::class;
    }
}
