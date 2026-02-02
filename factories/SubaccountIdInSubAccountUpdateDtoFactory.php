<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SubaccountIdInSubAccountUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SubaccountIdInSubAccountUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SubaccountIdInSubAccountUpdateDto::class;
    }
}
