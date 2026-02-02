<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SegmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SegmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'segmentId' => $this->faker->numberBetween(1, 1000),
            'segmentValue' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SegmentUpdateDto::class;
    }
}
