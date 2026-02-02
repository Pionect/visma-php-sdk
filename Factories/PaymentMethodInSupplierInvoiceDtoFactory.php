<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInSupplierInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInSupplierInvoiceDtoFactory extends Factory
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
        return PaymentMethodInSupplierInvoiceDto::class;
    }
}
