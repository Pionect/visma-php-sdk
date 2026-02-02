<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ControlQuantityInInventoryAdjustmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ControlQuantityInInventoryAdjustmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return ControlQuantityInInventoryAdjustmentUpdateDto::class;
    }
}
