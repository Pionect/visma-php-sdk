<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultCountryInExtendedOrganizationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultCountryInExtendedOrganizationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DefaultCountryInExtendedOrganizationDto::class;
    }
}
