<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerVatZoneInCustomerDebitNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerVatZoneInCustomerDebitNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerVatZoneInCustomerDebitNoteDto::class;
    }
}
