<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountyInAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountyInAddressDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CountyInAddressDto::class;
    }
}
