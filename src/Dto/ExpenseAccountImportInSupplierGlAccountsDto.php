<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Expense account, import &gt; The import expense account used to record expenses made to the
 * suppliers of this class.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseAccountImportInSupplierGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountImportInSupplierGlAccountsDtoFactory factory()
 */
class ExpenseAccountImportInSupplierGlAccountsDto extends Model
{
    #[Property]
    public ?string $type;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
