<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostPeriodInInventoryAdjustmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostPeriodInInventoryAdjustmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostPeriodInInventoryAdjustmentUpdateDto::class;
    }
}
