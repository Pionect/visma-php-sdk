<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReplenishmentClassInWarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ReplenishmentClassInWarehouseDto>
 */
class ReplenishmentClassInWarehouseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ReplenishmentClassInWarehouseDto::class;
    }
}
