<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PeppolSchemeInLocationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PeppolSchemeInLocationDto>
 */
class PeppolSchemeInLocationDtoFactory extends Factory
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
        return PeppolSchemeInLocationDto::class;
    }
}
