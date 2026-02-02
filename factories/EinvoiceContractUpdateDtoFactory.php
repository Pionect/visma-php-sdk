<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EinvoiceContractUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EinvoiceContractUpdateDtoFactory extends Factory
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
        return EinvoiceContractUpdateDto::class;
    }
}
