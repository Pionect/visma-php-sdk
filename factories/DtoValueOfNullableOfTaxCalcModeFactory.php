<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfTaxCalcMode;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfTaxCalcModeFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfTaxCalcMode::class;
    }
}
