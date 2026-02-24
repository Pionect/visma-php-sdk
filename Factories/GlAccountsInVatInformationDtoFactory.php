<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GlAccountsInVatInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\GlAccountsInVatInformationDto>
 */
class GlAccountsInVatInformationDtoFactory extends Factory
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
        return GlAccountsInVatInformationDto::class;
    }
}
