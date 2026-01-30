<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Non-stock items.
 * Purchase accrual account &gt; Purchase order accrual account &gt;
 * The liability account to be used for this stock item to accrue amounts on purchase orders related to
 * this item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseAccrualAccountInInventoryAccountInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccrualAccountInInventoryAccountInformationDtoFactory testFactory()
 */
class ExpenseAccrualAccountInInventoryAccountInformationDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
