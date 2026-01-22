<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaySelectedInSupplierInvoiceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaySelectedInSupplierInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return PaySelectedInSupplierInvoiceUpdateDto::class;
    }
}
