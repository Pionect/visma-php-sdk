<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ToWarehouseInInventoryTransferDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ToWarehouseInInventoryTransferDto>
 */
class ToWarehouseInInventoryTransferDtoFactory extends Factory
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
        return ToWarehouseInInventoryTransferDto::class;
    }
}
