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
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
