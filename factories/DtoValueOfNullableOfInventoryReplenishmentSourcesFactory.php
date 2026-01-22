<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfInventoryReplenishmentSources;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfInventoryReplenishmentSourcesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfInventoryReplenishmentSources::class;
    }
}
