<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SubaccountNumberInSubAccountUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SubaccountNumberInSubAccountUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SubaccountNumberInSubAccountUpdateDto::class;
    }
}
