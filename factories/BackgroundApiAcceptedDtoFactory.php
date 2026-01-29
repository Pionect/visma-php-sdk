<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BackgroundApiAcceptedDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BackgroundApiAcceptedDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'stateLocation' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BackgroundApiAcceptedDto::class;
    }
}
