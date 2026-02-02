<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EinvoiceContractInCustomerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EinvoiceContractInCustomerDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'fInvoiceContractId' => $this->faker->uuid(),
            'fInvoiceIntermediatorId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return EinvoiceContractInCustomerDto::class;
    }
}
