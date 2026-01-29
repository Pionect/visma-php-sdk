<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PrimaryItemClassInWarehouseLocationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PrimaryItemClassInWarehouseLocationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'attributes' => [],
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PrimaryItemClassInWarehouseLocationDto::class;
    }
}
