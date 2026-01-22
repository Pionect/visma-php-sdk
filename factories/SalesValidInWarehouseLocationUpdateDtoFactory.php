<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesValidInWarehouseLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesValidInWarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesValidInWarehouseLocationUpdateDto::class;
    }
}
