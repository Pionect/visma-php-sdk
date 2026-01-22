<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: VAT payable account* &gt; The liability account that accumulates the VAT amounts to
 * be paid to a tax agency for the VAT reporting period.
 */
class VatPayableAccountInVatGlAccountsDto extends Model
{
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
