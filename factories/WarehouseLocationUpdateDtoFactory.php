<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'locationId' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'active' => $this->faker->word(),
            'inclQtyAvail' => $this->faker->word(),
            'isCosted' => $this->faker->word(),
            'salesValid' => $this->faker->word(),
            'receiptsValid' => $this->faker->word(),
            'transfersValid' => $this->faker->word(),
            'assemblyValid' => $this->faker->word(),
            'pickPriority' => $this->faker->word(),
            'primaryItemValid' => $this->faker->word(),
            'primaryItemId' => $this->faker->word(),
            'primaryItemClassId' => $this->faker->word(),
            'projectId' => $this->faker->word(),
            'projectTaskId' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseLocationUpdateDto::class;
    }
}
