<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UoMinTimeCardMaterialsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UoMinTimeCardMaterialsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return UoMinTimeCardMaterialsUpdateDto::class;
    }
}
