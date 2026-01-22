<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatCodeInSupplierInvoiceLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCodeInSupplierInvoiceLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return VatCodeInSupplierInvoiceLineDto::class;
    }
}
