<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OverrideNumberSeriesInCustomerInvoiceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OverrideNumberSeriesInCustomerInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return OverrideNumberSeriesInCustomerInvoiceUpdateDto::class;
    }
}
