<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\KitAssemblyInsertDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyInsertDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'kitAssemblyLink' => KitAssemblyLinkInsertDtoFactory::new()->make(),
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
            'quantity' => null,
            'stockComponentLines' => [],
            'stockComponentAllocations' => [],
            'nonStockComponentLines' => [],
            'kitAllocations' => [],
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyInsertDto::class;
    }
}
