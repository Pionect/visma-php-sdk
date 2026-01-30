<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DtoSegmentValue;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoSegmentValueFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->uuid(),
            'segmentId' => $this->faker->numberBetween(1, 1000),
            'valueId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'publicId' => $this->faker->uuid(),
            'active' => $this->faker->boolean(),
            'timeStamp' => $this->faker->word(),
            'lastModified' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'mappedSegValue' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoSegmentValue::class;
    }
}
