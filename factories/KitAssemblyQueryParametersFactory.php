<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\KitAssemblyQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTimeCondition' => $this->faker->word(),
            'refNo' => $this->faker->word(),
            'status' => $this->faker->word(),
            'expandStockComponents' => $this->faker->boolean(),
            'expandNonStockComponents' => $this->faker->boolean(),
            'expandKitAllocations' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyQueryParameters::class;
    }
}
