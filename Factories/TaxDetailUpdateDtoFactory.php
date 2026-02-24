<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\TaxDetailUpdateDto>
 */
class TaxDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'taxId' => $this->faker->uuid(),
            'taxableAmount' => null,
            'vatAmount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return TaxDetailUpdateDto::class;
    }
}
