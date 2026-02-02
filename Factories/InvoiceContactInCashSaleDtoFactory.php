<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InvoiceContactInCashSaleDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InvoiceContactInCashSaleDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'contactId' => $this->faker->numberBetween(1, 1000),
            'businessName' => $this->faker->company(),
            'attention' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'phone1' => $this->faker->word(),
            'overrideContact' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return InvoiceContactInCashSaleDto::class;
    }
}
