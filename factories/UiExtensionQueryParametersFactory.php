<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UiExtensionQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UiExtensionQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'screenId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return UiExtensionQueryParameters::class;
    }
}
