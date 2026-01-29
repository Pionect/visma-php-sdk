<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT Claimable account &gt; The account that accumulates the VAT amounts to be claimed from the tax
 * agency for the VAT reporting period.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatClaimableAccountInVatGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatClaimableAccountInVatGlAccountsDtoFactory factory()
 */
class VatClaimableAccountInVatGlAccountsDto extends Model
{
    /** Account &gt; The account number. */
    #[Property]
    public ?string $type;

    /** Account class &gt; The identifier of the account class. */
    #[Property]
    public ?string $externalCode1;

    /** Account class &gt; The name of the account class. */
    #[Property]
    public ?string $externalCode2;

    #[Property]
    public ?bool $active;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
