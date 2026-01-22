<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfInventoryCrossReferenceAlternateTypes;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfInventoryCrossReferenceAlternateTypesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfInventoryCrossReferenceAlternateTypes::class;
    }
}
