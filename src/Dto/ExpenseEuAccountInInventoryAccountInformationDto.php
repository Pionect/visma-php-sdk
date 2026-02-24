<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Expense EU account &gt; The income account to be used for this stock item to record EU expenses.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseEuAccountInInventoryAccountInformationDtoFactory testFactory()
 */
class ExpenseEuAccountInInventoryAccountInformationDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ExpenseEuAccountInInventoryAccountInformationDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
