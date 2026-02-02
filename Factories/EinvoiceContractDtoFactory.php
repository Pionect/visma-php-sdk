<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EinvoiceContractDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EinvoiceContractDtoFactory extends Factory
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
        return EinvoiceContractDto::class;
    }
}
