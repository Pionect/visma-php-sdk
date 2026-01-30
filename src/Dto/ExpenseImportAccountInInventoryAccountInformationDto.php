<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Expense account, import &gt; The income account to be used for this stock item to record import
 * expenses.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseImportAccountInInventoryAccountInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseImportAccountInInventoryAccountInformationDtoFactory factory()
 */
class ExpenseImportAccountInInventoryAccountInformationDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
