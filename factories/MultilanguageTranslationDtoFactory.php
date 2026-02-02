<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\MultilanguageTranslationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class MultilanguageTranslationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'translation' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return MultilanguageTranslationDto::class;
    }
}
