<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AlternateTypeInCrossReferenceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AlternateTypeInCrossReferenceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AlternateTypeInCrossReferenceUpdateDto::class;
    }
}
