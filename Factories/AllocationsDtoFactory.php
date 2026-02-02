<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\AllocationsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AllocationsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'itemId' => $this->faker->uuid(),
            'location' => null,
            'lotSerialNumber' => $this->faker->word(),
            'quantity' => null,
            'uom' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return AllocationsDto::class;
    }
}
