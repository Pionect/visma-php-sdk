<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DtoSegment;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoSegmentFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->uuid(),
            'segmentId' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->sentence(),
            'length' => $this->faker->numberBetween(1, 100),
            'publicId' => $this->faker->uuid(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModified' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'validate' => $this->faker->boolean(),
            'segmentValues' => [],
            'isAutoNumber' => $this->faker->boolean(),
            'consolNumChar' => $this->faker->numberBetween(1, 100),
            'consolOrder' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return DtoSegment::class;
    }
}
