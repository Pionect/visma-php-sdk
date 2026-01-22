<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return InventoryDto::class;
    }
}
