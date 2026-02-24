<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SegmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SegmentUpdateDto>
 */
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
