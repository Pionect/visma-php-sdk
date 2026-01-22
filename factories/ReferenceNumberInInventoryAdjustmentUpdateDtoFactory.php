<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReferenceNumberInInventoryAdjustmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReferenceNumberInInventoryAdjustmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ReferenceNumberInInventoryAdjustmentUpdateDto::class;
    }
}
