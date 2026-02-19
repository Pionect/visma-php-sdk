<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Only used for Non-stock items.
 * Purchase accrual account &gt; Purchase order accrual account &gt;
 * The liability account to be used for this stock item to accrue amounts on purchase orders related to
 * this item.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccrualAccountInInventoryAccountInformationDtoFactory testFactory()
 */
class ExpenseAccrualAccountInInventoryAccountInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
