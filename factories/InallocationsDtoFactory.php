<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InallocationsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InallocationsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'location' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return InallocationsDto::class;
    }
}
