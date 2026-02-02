<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Receipt details tab &gt; Expense details section &gt; VAT category &gt; The tax category for the
 * expense receipt.
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInExpenseReceiptDtoFactory testFactory()
 */
class TaxCategoryInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
