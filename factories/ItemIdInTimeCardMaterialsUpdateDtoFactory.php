<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ItemIdInTimeCardMaterialsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ItemIdInTimeCardMaterialsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ItemIdInTimeCardMaterialsUpdateDto::class;
    }
}
