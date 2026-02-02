<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\Stream;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class StreamFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'canRead' => $this->faker->boolean(),
            'canSeek' => $this->faker->boolean(),
            'canTimeout' => $this->faker->boolean(),
            'canWrite' => $this->faker->boolean(),
            'length' => $this->faker->numberBetween(1, 100),
            'position' => $this->faker->numberBetween(1, 100),
            'readTimeout' => $this->faker->numberBetween(1, 100),
            'writeTimeout' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return Stream::class;
    }
}
