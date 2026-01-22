<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UiExtensionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UiExtensionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->uuid(),
            'title' => $this->faker->sentence(),
            'url' => $this->faker->word(),
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
