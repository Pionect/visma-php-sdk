<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LanguageUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LanguageUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'languageIso' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LanguageUpdateDto::class;
    }
}
