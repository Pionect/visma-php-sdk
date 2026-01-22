<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreditTermsInCustomerInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditTermsInCustomerInvoiceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CreditTermsInCustomerInvoiceDto::class;
    }
}
