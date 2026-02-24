<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReceiptLocationInWarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ReceiptLocationInWarehouseDto>
 */
class ReceiptLocationInWarehouseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ReceiptLocationInWarehouseDto::class;
    }
}
