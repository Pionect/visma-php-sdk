<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GlnInPurchaseOrderUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GlnInPurchaseOrderUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return GlnInPurchaseOrderUpdateDto::class;
    }
}
