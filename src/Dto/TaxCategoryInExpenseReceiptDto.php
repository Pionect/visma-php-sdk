<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Expense details section &gt; VAT category &gt; The tax category for the
 * expense receipt.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxCategoryInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInExpenseReceiptDtoFactory factory()
 */
class TaxCategoryInExpenseReceiptDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
