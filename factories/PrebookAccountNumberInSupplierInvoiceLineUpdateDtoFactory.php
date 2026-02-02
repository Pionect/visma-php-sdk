<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PrebookAccountNumberInSupplierInvoiceLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PrebookAccountNumberInSupplierInvoiceLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PrebookAccountNumberInSupplierInvoiceLineUpdateDto::class;
    }
}
