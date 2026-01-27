<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\KitSpecificationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitSpecificationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'kitInventoryId' => $this->faker->uuid(),
            'revision' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'isActive' => $this->faker->boolean(),
            'allowComponentAddition' => $this->faker->boolean(),
            'isNonStock' => $this->faker->boolean(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'stockComponentLines' => [],
            'nonStockComponentLines' => [],
            'timestamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitSpecificationDto::class;
    }
}
