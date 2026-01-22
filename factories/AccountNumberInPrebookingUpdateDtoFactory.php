<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountNumberInPrebookingUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AccountNumberInPrebookingUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountNumberInPrebookingUpdateDto::class;
    }
}
