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
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'personalId' => $this->faker->uuid(),
            'amount' => null,
            'extra' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return RotRutDistributionUpdateDto::class;
    }
}
