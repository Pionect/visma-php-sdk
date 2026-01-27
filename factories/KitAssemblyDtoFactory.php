<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\KitAssemblyDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNo' => $this->faker->word(),
            'status' => $this->faker->word(),
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
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'salesOrderLink' => $this->faker->word(),
            'stockComponentLines' => [],
            'nonStockComponentLines' => [],
            'kitAllocations' => [],
            'timestamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyDto::class;
    }
}
