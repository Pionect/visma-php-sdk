<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\IsCostedInWarehouseLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class IsCostedInWarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return IsCostedInWarehouseLocationUpdateDto::class;
    }
}
