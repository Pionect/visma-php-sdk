<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReceiptLocationInWarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReceiptLocationInWarehouseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ReceiptLocationInWarehouseDto::class;
    }
}
