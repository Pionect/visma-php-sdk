<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PrimaryItemIdInWarehouseLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PrimaryItemIdInWarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PrimaryItemIdInWarehouseLocationUpdateDto::class;
    }
}
