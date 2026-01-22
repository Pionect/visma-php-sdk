<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerVatZoneInCustomerCreditWriteOffDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerVatZoneInCustomerCreditWriteOffDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerVatZoneInCustomerCreditWriteOffDto::class;
    }
}
