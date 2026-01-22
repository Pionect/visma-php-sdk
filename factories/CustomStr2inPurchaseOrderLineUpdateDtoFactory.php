<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr2inPurchaseOrderLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr2inPurchaseOrderLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr2inPurchaseOrderLineUpdateDto::class;
    }
}
