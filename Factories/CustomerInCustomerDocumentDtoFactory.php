<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInCustomerDocumentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInCustomerDocumentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInCustomerDocumentDto::class;
    }
}
