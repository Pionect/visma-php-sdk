<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SiteIdInSupplierInvoiceLandedCostUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SiteIdInSupplierInvoiceLandedCostUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SiteIdInSupplierInvoiceLandedCostUpdateDto::class;
    }
}
