<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Expense account, import &gt; The income account to be used for this stock item to record import
 * expenses.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseImportAccountInInventoryAccountInformationDtoFactory testFactory()
 */
class ExpenseImportAccountInInventoryAccountInformationDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ExpenseImportAccountInInventoryAccountInformationDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
