<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PeppolSchemeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PeppolSchemeDto>
 */
class PeppolSchemeDtoFactory extends Factory
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
        return PeppolSchemeDto::class;
    }
}
