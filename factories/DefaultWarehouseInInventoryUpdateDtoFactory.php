<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultWarehouseInInventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultWarehouseInInventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DefaultWarehouseInInventoryUpdateDto::class;
    }
}
