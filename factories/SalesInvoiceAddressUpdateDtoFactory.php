<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesInvoiceAddressUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesInvoiceAddressUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'overrideAddress' => $this->faker->word(),
            'addressLine1' => $this->faker->word(),
            'addressLine2' => $this->faker->word(),
            'addressLine3' => $this->faker->word(),
            'postalCode' => $this->faker->word(),
            'city' => $this->faker->word(),
            'countryId' => $this->faker->word(),
            'county' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesInvoiceAddressUpdateDto::class;
    }
}
