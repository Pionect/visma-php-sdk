<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerVatZoneInCustomerCreditNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerVatZoneInCustomerCreditNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerVatZoneInCustomerCreditNoteDto::class;
    }
}
