<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseIdDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseIdDescriptionDto::class;
    }
}
