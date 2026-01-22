<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\HoldInInventoryAdjustmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class HoldInInventoryAdjustmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return HoldInInventoryAdjustmentUpdateDto::class;
    }
}
