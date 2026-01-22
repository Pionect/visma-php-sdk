<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostPeriodInCustomerInvoiceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostPeriodInCustomerInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostPeriodInCustomerInvoiceUpdateDto::class;
    }
}
