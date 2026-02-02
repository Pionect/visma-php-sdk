<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatGlAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatGlAccountsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'vatPayableAccount' => null,
            'vatPayableSubaccount' => null,
            'vatClaimableAccount' => null,
            'vatClaimableSubccount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return VatGlAccountsDto::class;
    }
}
