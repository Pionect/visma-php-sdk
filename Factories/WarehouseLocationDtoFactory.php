<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseLocationDto;
use Pionect\VismaSdk\Enums\WarehouseLocationPrimaryItemValidEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\WarehouseLocationDto>
 */
class WarehouseLocationDtoFactory extends Factory
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
            'primaryItemValid' => $this->faker->randomElement(WarehouseLocationPrimaryItemValidEnum::cases()),
            'primaryItem' => null,
            'primaryItemClass' => null,
            'project' => null,
            'projectTask' => null,
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseLocationDto::class;
    }
}
