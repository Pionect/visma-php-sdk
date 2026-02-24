<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UiExtensionQueryParameters;
use Pionect\VismaSdk\Enums\UiExtensionQueryParametersTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\UiExtensionQueryParameters>
 */
class UiExtensionQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'screenId' => $this->faker->uuid(),
            'type' => $this->faker->randomElement(UiExtensionQueryParametersTypeEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return UiExtensionQueryParameters::class;
    }
}
