<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PeppolSchemeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PeppolSchemeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'endpoint' => $this->faker->word(),
            'partyIdentification' => $this->faker->word(),
            'partyLegal' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PeppolSchemeUpdateDto::class;
    }
}
