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
            'quantityOnHand' => null,
            'available' => null,
            'availableForShipment' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseDetailDto::class;
    }
}
