<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UiExtensionDto;
use Pionect\VismaSdk\Enums\UiExtensionQueryParametersTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\UiExtensionDto>
 */
class UiExtensionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->uuid(),
            'title' => $this->faker->sentence(),
            'url' => $this->faker->word(),
            'type' => $this->faker->randomElement(UiExtensionQueryParametersTypeEnum::cases()),
            'screenId' => $this->faker->uuid(),
            'stepId' => $this->faker->uuid(),
            'ownerName' => $this->faker->company(),
            'enabled' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return UiExtensionDto::class;
    }
}
