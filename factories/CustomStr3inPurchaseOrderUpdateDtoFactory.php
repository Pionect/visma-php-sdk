<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr3inPurchaseOrderUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr3inPurchaseOrderUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr3inPurchaseOrderUpdateDto::class;
    }
}
