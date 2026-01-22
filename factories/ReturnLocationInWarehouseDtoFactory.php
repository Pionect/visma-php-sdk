<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReturnLocationInWarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReturnLocationInWarehouseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ReturnLocationInWarehouseDto::class;
    }
}
