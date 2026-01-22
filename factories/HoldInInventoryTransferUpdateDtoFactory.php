<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\HoldInInventoryTransferUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class HoldInInventoryTransferUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return HoldInInventoryTransferUpdateDto::class;
    }
}
