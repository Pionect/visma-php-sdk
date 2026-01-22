<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return CustomerQueryParameters::class;
    }
}
