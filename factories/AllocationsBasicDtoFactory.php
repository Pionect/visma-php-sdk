<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AllocationsBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AllocationsBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'location' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return AllocationsBasicDto::class;
    }
}
