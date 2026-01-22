<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DescriptionInSupplierInvoiceLandedCostUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DescriptionInSupplierInvoiceLandedCostUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DescriptionInSupplierInvoiceLandedCostUpdateDto::class;
    }
}
