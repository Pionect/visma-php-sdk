<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FobpointDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FobpointDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return FobpointDescriptionDto::class;
    }
}
