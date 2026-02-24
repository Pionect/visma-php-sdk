<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\MultilanguageTranslationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\MultilanguageTranslationDto>
 */
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
