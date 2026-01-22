<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GlAccountsInVatInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GlAccountsInVatInformationDtoFactory extends Factory
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
        return GlAccountsInVatInformationDto::class;
    }
}
