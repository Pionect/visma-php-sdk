<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'locationId' => null,
            'description' => $this->faker->sentence(),
            'active' => null,
            'inclQtyAvail' => null,
            'isCosted' => null,
            'salesValid' => null,
            'receiptsValid' => null,
            'transfersValid' => null,
            'assemblyValid' => null,
            'pickPriority' => null,
            'primaryItemValid' => null,
            'primaryItemId' => null,
            'primaryItemClassId' => null,
            'projectId' => null,
            'projectTaskId' => null,
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseLocationUpdateDto::class;
    }
}
