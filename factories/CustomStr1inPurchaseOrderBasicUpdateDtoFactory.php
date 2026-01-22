<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr1inPurchaseOrderBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr1inPurchaseOrderBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr1inPurchaseOrderBasicUpdateDto::class;
    }
}
