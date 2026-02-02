<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreditTermsInCustomerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditTermsInCustomerDtoFactory extends Factory
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
        return CreditTermsInCustomerDto::class;
    }
}
