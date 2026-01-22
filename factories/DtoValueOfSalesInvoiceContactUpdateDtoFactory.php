<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfSalesInvoiceContactUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfSalesInvoiceContactUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfSalesInvoiceContactUpdateDto::class;
    }
}
