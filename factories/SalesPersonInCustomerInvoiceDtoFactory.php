<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonInCustomerInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonInCustomerInvoiceDtoFactory extends Factory
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
        return SalesPersonInCustomerInvoiceDto::class;
    }
}
