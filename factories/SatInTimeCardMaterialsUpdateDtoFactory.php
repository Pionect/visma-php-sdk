<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SatInTimeCardMaterialsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SatInTimeCardMaterialsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return SatInTimeCardMaterialsUpdateDto::class;
    }
}
