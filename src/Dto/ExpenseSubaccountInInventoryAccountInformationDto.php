<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Non-stock items.
 * Mandatory field: Expense sub* &gt; The subaccount to be used by
 * default with the expense account for transactions related to this non-stock item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseSubaccountInInventoryAccountInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseSubaccountInInventoryAccountInformationDtoFactory factory()
 */
class ExpenseSubaccountInInventoryAccountInformationDto extends Model
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
