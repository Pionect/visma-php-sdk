<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ModeOfTransportDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ModeOfTransportDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ModeOfTransportDto::class;
    }
}
