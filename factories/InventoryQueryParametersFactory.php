<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return InventoryQueryParameters::class;
    }
}
