<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreditTermsInSupplierDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditTermsInSupplierDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CreditTermsInSupplierDto::class;
    }
}
