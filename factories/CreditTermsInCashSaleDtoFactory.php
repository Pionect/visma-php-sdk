<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreditTermsInCashSaleDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditTermsInCashSaleDtoFactory extends Factory
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
        return CreditTermsInCashSaleDto::class;
    }
}
