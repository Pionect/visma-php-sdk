<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\IndustryCodeInExtendedOrganizationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class IndustryCodeInExtendedOrganizationDtoFactory extends Factory
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
        return IndustryCodeInExtendedOrganizationDto::class;
    }
}
