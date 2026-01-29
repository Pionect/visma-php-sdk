<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\KitAssemblyUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'refNo' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'itemId' => $this->faker->uuid(),
            'revision' => $this->faker->word(),
            'reasonCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'warehouse' => $this->faker->word(),
            'location' => $this->faker->word(),
            'uoM' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'stockComponentLines' => [],
            'stockComponentAllocations' => [],
            'nonStockComponentLines' => [],
            'kitAllocations' => [],
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyUpdateDto::class;
    }
}
