<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Expense account, non-taxable &gt; The income account to be used for this stock item to record
 * non-taxable expenses.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseNonTaxableAccountInInventoryAccountInformationDtoFactory testFactory()
 */
class ExpenseNonTaxableAccountInInventoryAccountInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
