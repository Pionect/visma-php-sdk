<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ModeOfTransportDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ModeOfTransportDto>
 */
class ModeOfTransportDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ModeOfTransportDto::class;
    }
}
