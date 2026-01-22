<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountyInCustomerDocumentAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountyInCustomerDocumentAddressDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CountyInCustomerDocumentAddressDto::class;
    }
}
