<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return SupplierQueryParameters::class;
    }
}
