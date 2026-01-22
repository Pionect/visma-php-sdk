<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomInt2inPurchaseOrderLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomInt2inPurchaseOrderLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CustomInt2inPurchaseOrderLineUpdateDto::class;
    }
}
