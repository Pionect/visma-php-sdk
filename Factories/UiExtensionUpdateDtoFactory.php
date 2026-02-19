<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UiExtensionUpdateDto;
use Pionect\VismaSdk\Enums\UiExtensionQueryParametersTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UiExtensionUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'url' => $this->faker->word(),
            'type' => $this->faker->randomElement(UiExtensionQueryParametersTypeEnum::cases()),
            'screenId' => $this->faker->uuid(),
            'stepId' => $this->faker->uuid(),
            'ownerId' => $this->faker->uuid(),
            'ownerName' => $this->faker->company(),
        ];
    }

    protected function modelClass(): string
    {
        return UiExtensionUpdateDto::class;
    }
}
