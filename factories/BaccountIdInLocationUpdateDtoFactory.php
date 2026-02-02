<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BaccountIdInLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BaccountIdInLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BaccountIdInLocationUpdateDto::class;
    }
}
