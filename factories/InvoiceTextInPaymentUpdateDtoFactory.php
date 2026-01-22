<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InvoiceTextInPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InvoiceTextInPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InvoiceTextInPaymentUpdateDto::class;
    }
}
