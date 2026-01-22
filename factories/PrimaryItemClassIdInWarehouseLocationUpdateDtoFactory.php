<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PrimaryItemClassIdInWarehouseLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PrimaryItemClassIdInWarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PrimaryItemClassIdInWarehouseLocationUpdateDto::class;
    }
}
