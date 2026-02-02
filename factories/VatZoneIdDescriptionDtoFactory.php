<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatZoneIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatZoneIdDescriptionDtoFactory extends Factory
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
        return VatZoneIdDescriptionDto::class;
    }
}
