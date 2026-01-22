<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContactInCustomerInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContactInCustomerInvoiceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return ContactInCustomerInvoiceDto::class;
    }
}
