<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Expense sub &gt; The corresponding subaccount used to record expenses incurred for the supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseSubaccountInSupplierGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseSubaccountInSupplierGlAccountsDtoFactory factory()
 */
class ExpenseSubaccountInSupplierGlAccountsDto extends Model
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
