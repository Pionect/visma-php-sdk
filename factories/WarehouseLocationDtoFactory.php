<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseLocationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

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
            'primaryItemValid' => $this->faker->word(),
            'primaryItem' => PrimaryItemInWarehouseLocationDtoFactory::new()->make(),
            'primaryItemClass' => PrimaryItemClassInWarehouseLocationDtoFactory::new()->make(),
            'project' => ProjectInWarehouseLocationDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInWarehouseLocationDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseLocationDto::class;
    }
}
