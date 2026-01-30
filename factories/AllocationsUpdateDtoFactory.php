<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AllocationsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AllocationsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => null,
            'location' => null,
            'lotSerialNumber' => $this->faker->word(),
            'quantity' => null,
            'uom' => null,
            'expirationDate' => null,
        ];
    }

    protected function modelClass(): string
    {
        return AllocationsUpdateDto::class;
    }
}
