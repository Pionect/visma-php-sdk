<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxInCashTranTaxDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxInCashTranTaxDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TaxInCashTranTaxDetailDto::class;
    }
}
