<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SunInTimeCardMaterialsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SunInTimeCardMaterialsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return SunInTimeCardMaterialsUpdateDto::class;
    }
}
