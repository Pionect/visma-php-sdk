<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT claimable subaccount &gt; The corresponding tax claimable subaccount.
 *
 * @method static \Pionect\VismaSdk\Factories\VatClaimableSubccountInVatGlAccountsDtoFactory testFactory()
 */
class VatClaimableSubccountInVatGlAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
