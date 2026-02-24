<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LanguageUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\LanguageUpdateDto>
 */
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
