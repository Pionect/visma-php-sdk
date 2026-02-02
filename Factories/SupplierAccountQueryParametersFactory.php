<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierAccountQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierAccountQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'supplierItemId' => [],
            'vatRegistrationId' => $this->faker->uuid(),
            'linesNonTaxable' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierAccountQueryParameters::class;
    }
}
