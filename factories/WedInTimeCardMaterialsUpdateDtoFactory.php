<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WedInTimeCardMaterialsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WedInTimeCardMaterialsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return WedInTimeCardMaterialsUpdateDto::class;
    }
}
