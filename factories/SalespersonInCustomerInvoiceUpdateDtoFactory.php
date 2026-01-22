<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalespersonInCustomerInvoiceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalespersonInCustomerInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalespersonInCustomerInvoiceUpdateDto::class;
    }
}
