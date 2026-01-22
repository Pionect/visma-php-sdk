<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerContractQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerContractQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractQueryParameters::class;
    }
}
