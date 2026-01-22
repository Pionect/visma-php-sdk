<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InallocationsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InallocationsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->word(),
            'location' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return InallocationsUpdateDto::class;
    }
}
