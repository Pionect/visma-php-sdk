<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatZoneInSupplierDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatZoneInSupplierDtoFactory extends Factory
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
        return VatZoneInSupplierDto::class;
    }
}
