<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoSegmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

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
