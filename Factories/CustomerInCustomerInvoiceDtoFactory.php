<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInCustomerInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInCustomerInvoiceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInCustomerInvoiceDto::class;
    }
}
