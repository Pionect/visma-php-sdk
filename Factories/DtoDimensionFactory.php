<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoDimension;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DtoDimension>
 */
class DtoDimensionFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'length' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->sentence(),
            'segments' => [],
        ];
    }

    protected function modelClass(): string
    {
        return DtoDimension::class;
    }
}
