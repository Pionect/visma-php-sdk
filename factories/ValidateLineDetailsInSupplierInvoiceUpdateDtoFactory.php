<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ValidateLineDetailsInSupplierInvoiceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ValidateLineDetailsInSupplierInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ValidateLineDetailsInSupplierInvoiceUpdateDto::class;
    }
}
