<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FriInTimeCardMaterialsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FriInTimeCardMaterialsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return FriInTimeCardMaterialsUpdateDto::class;
    }
}
