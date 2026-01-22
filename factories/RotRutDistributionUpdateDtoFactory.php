<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RotRutDistributionUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class RotRutDistributionUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->word(),
            'personalId' => $this->faker->word(),
            'amount' => $this->faker->word(),
            'extra' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return RotRutDistributionUpdateDto::class;
    }
}
