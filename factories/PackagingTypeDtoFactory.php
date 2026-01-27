<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PackagingTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PackagingTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'boxId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'boxWeight' => $this->faker->randomFloat(2, 0, 1000),
            'maxWeight' => $this->faker->randomFloat(2, 0, 1000),
            'weightUoM' => $this->faker->word(),
            'maxVolume' => $this->faker->randomFloat(2, 0, 1000),
            'volumeUoM' => $this->faker->word(),
            'length' => $this->faker->numberBetween(1, 100),
            'width' => $this->faker->numberBetween(1, 100),
            'height' => $this->faker->numberBetween(1, 100),
            'activeByDefault' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return PackagingTypeDto::class;
    }
}
