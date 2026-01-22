<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\MultilanguageDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class MultilanguageDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'languageIso' => $this->faker->word(),
            'translation' => $this->faker->word(),
            'isTranslated' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return MultilanguageDto::class;
    }
}
