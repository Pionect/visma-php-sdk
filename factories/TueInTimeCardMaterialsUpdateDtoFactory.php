<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TueInTimeCardMaterialsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TueInTimeCardMaterialsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return TueInTimeCardMaterialsUpdateDto::class;
    }
}
