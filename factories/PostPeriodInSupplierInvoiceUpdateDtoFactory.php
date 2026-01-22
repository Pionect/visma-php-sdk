<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostPeriodInSupplierInvoiceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostPeriodInSupplierInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostPeriodInSupplierInvoiceUpdateDto::class;
    }
}
