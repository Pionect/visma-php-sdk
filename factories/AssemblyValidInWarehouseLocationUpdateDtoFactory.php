<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AssemblyValidInWarehouseLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AssemblyValidInWarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return AssemblyValidInWarehouseLocationUpdateDto::class;
    }
}
