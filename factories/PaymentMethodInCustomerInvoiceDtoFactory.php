<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInCustomerInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInCustomerInvoiceDtoFactory extends Factory
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
        return PaymentMethodInCustomerInvoiceDto::class;
    }
}
