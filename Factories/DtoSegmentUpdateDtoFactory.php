<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoSegmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DtoSegmentUpdateDto>
 */
class DtoSegmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'segmentValues' => [],
            'dimensionId' => $this->faker->uuid(),
            'segementId' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoSegmentUpdateDto::class;
    }
}
