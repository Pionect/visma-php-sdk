<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CurrencyIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CurrencyIdDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CurrencyIdDescriptionDto::class;
    }
}
