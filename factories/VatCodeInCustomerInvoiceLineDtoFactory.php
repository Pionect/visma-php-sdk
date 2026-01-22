<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatCodeInCustomerInvoiceLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCodeInCustomerInvoiceLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return VatCodeInCustomerInvoiceLineDto::class;
    }
}
