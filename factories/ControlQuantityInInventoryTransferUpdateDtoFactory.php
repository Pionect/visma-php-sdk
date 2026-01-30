<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ControlQuantityInInventoryTransferUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ControlQuantityInInventoryTransferUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return ControlQuantityInInventoryTransferUpdateDto::class;
    }
}
