<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountryInCustomerDocumentAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountryInCustomerDocumentAddressDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CountryInCustomerDocumentAddressDto::class;
    }
}
