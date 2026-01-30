<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT claimable subaccount &gt; The corresponding tax claimable subaccount.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatClaimableSubccountInVatGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatClaimableSubccountInVatGlAccountsDtoFactory factory()
 */
class VatClaimableSubccountInVatGlAccountsDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
