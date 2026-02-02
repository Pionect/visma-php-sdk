<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ActiveInWarehouseLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ActiveInWarehouseLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ActiveInWarehouseLocationUpdateDto::class;
    }
}
