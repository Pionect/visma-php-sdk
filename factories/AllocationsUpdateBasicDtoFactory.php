<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AllocationsUpdateBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AllocationsUpdateBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'location' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return AllocationsUpdateBasicDto::class;
    }
}
