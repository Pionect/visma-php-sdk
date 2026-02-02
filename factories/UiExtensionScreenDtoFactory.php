<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UiExtensionScreenDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UiExtensionScreenDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'screenId' => $this->faker->uuid(),
            'stepIds' => [],
        ];
    }

    protected function modelClass(): string
    {
        return UiExtensionScreenDto::class;
    }
}
