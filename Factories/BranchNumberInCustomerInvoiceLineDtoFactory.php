<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInCustomerInvoiceLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInCustomerInvoiceLineDtoFactory extends Factory
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
        return BranchNumberInCustomerInvoiceLineDto::class;
    }
}
