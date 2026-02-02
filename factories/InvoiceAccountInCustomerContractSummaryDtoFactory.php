<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InvoiceAccountInCustomerContractSummaryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InvoiceAccountInCustomerContractSummaryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return InvoiceAccountInCustomerContractSummaryDto::class;
    }
}
