<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatAgencyIdInVatInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\VatAgencyIdInVatInformationDto>
 */
class VatAgencyIdInVatInformationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return VatAgencyIdInVatInformationDto::class;
    }
}
