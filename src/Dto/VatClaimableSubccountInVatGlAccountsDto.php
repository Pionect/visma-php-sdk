<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    #[Property]
    public ?bool $active;

    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
