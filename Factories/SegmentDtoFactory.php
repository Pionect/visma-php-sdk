<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SegmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SegmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'segmentId' => $this->faker->numberBetween(1, 1000),
            'segmentDescription' => $this->faker->sentence(),
            'segmentValue' => $this->faker->word(),
            'segmentValueDescription' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SegmentDto::class;
    }
}
