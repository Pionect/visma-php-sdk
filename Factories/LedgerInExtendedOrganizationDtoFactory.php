<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LedgerInExtendedOrganizationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\LedgerInExtendedOrganizationDto>
 */
class LedgerInExtendedOrganizationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return LedgerInExtendedOrganizationDto::class;
    }
}
