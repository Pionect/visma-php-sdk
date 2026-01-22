<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatGlAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatGlAccountsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'vatPayableAccount' => $this->faker->word(),
            'vatPayableSubaccount' => $this->faker->word(),
            'vatClaimableAccount' => $this->faker->word(),
            'vatClaimableSubccount' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatGlAccountsDto::class;
    }
}
