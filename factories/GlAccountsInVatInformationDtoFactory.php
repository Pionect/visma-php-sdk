<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GlAccountsInVatInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GlAccountsInVatInformationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'vatPayableAccount' => VatPayableAccountInVatGlAccountsDtoFactory::new()->make(),
            'vatPayableSubaccount' => VatPayableSubaccountInVatGlAccountsDtoFactory::new()->make(),
            'vatClaimableAccount' => VatClaimableAccountInVatGlAccountsDtoFactory::new()->make(),
            'vatClaimableSubccount' => VatClaimableSubccountInVatGlAccountsDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return GlAccountsInVatInformationDto::class;
    }
}
