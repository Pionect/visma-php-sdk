<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfSalesInvoiceAddressUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfSalesInvoiceAddressUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfSalesInvoiceAddressUpdateDto::class;
    }
}
