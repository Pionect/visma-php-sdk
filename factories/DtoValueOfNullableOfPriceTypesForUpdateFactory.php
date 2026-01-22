<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfPriceTypesForUpdate;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfPriceTypesForUpdateFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfPriceTypesForUpdate::class;
    }
}
