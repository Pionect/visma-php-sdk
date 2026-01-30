<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\MonInTimeCardMaterialsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class MonInTimeCardMaterialsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return MonInTimeCardMaterialsUpdateDto::class;
    }
}
