<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseLocationUpdateDto;
use Pionect\VismaSdk\Enums\WarehouseLocationPrimaryItemValidEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\WarehouseLocationUpdateDto>
 */
class WarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'locationId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'active' => $this->faker->boolean(),
            'inclQtyAvail' => $this->faker->boolean(),
            'isCosted' => $this->faker->boolean(),
            'salesValid' => $this->faker->boolean(),
            'receiptsValid' => $this->faker->boolean(),
            'transfersValid' => $this->faker->boolean(),
            'assemblyValid' => $this->faker->boolean(),
            'pickPriority' => $this->faker->numberBetween(1, 100),
            'primaryItemValid' => $this->faker->randomElement(WarehouseLocationPrimaryItemValidEnum::cases()),
            'primaryItemId' => $this->faker->uuid(),
            'primaryItemClassId' => $this->faker->uuid(),
            'projectId' => $this->faker->uuid(),
            'projectTaskId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseLocationUpdateDto::class;
    }
}
