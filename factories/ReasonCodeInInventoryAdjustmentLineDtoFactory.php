<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReasonCodeInInventoryAdjustmentLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReasonCodeInInventoryAdjustmentLineDtoFactory extends Factory
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
        return ReasonCodeInInventoryAdjustmentLineDto::class;
    }
}
