<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreditTermsInSupplierInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditTermsInSupplierInvoiceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CreditTermsInSupplierInvoiceDto::class;
    }
}
