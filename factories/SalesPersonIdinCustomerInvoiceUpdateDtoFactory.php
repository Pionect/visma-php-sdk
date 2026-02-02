<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonIdinCustomerInvoiceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonIdinCustomerInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonIdinCustomerInvoiceUpdateDto::class;
    }
}
