<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchByIdQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchByIdQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'expandAddress' => $this->faker->boolean(),
            'expandContact' => $this->faker->boolean(),
            'expandCurrency' => $this->faker->boolean(),
            'expandVatZone' => $this->faker->boolean(),
            'expandLedger' => $this->faker->boolean(),
            'expandIndustryCode' => $this->faker->boolean(),
            'expandDeliveryAddress' => $this->faker->boolean(),
            'expandDeliveryContact' => $this->faker->boolean(),
            'expandDefaultCountry' => $this->faker->boolean(),
            'expandBankSettings' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchByIdQueryParameters::class;
    }
}
