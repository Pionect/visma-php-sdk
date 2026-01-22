<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LandedCostCodeIdInSupplierInvoiceLandedCostUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LandedCostCodeIdInSupplierInvoiceLandedCostUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LandedCostCodeIdInSupplierInvoiceLandedCostUpdateDto::class;
    }
}
