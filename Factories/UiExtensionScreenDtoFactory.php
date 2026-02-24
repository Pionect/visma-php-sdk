<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UiExtensionScreenDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\UiExtensionScreenDto>
 */
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
