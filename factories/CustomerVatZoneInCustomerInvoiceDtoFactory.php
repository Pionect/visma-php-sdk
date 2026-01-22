<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerVatZoneInCustomerInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerVatZoneInCustomerInvoiceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerVatZoneInCustomerInvoiceDto::class;
    }
}
