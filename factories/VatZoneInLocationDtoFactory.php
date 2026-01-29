<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatZoneInLocationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatZoneInLocationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'defaultVatCategory' => $this->faker->word(),
            'defaultTaxCategory' => TaxCategoryNumberDescriptionDtoFactory::new()->make(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatZoneInLocationDto::class;
    }
}
