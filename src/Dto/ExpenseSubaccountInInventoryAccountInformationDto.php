<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Only used for Non-stock items.
 * Mandatory field: Expense sub* &gt; The subaccount to be used by
 * default with the expense account for transactions related to this non-stock item.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseSubaccountInInventoryAccountInformationDtoFactory testFactory()
 */
class ExpenseSubaccountInInventoryAccountInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
