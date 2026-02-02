<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ControlCostInInventoryReceiptUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ControlCostInInventoryReceiptUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return ControlCostInInventoryReceiptUpdateDto::class;
    }
}
