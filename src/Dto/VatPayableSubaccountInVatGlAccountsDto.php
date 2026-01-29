<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: VAT payable subaccount* &gt; The corresponding VAT payable subaccount.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatPayableSubaccountInVatGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatPayableSubaccountInVatGlAccountsDtoFactory factory()
 */
class VatPayableSubaccountInVatGlAccountsDto extends Model
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
