<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\WarehouseDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'isDefault' => $this->faker->boolean(),
            'warehouse' => $this->faker->word(),
            'quantityOnHand' => $this->faker->randomFloat(2, 0, 1000),
            'available' => $this->faker->randomFloat(2, 0, 1000),
            'availableForShipment' => $this->faker->randomFloat(2, 0, 1000),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseDetailDto::class;
    }
}
