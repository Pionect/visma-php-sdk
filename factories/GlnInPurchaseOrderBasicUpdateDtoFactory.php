<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GlnInPurchaseOrderBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GlnInPurchaseOrderBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return GlnInPurchaseOrderBasicUpdateDto::class;
    }
}
