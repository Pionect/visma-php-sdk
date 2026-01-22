<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryNumberInInventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryNumberInInventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryNumberInInventoryUpdateDto::class;
    }
}
