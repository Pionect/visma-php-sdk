<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Supplier sub &gt; The corresponding subaccount used to record the balance of supplier ledger
 * transactions related to the supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierSubaccountInSupplierGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierSubaccountInSupplierGlAccountsDtoFactory factory()
 */
class SupplierSubaccountInSupplierGlAccountsDto extends Model
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
