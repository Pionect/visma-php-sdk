<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The financial period to which the transactions recorded in the document should be posted. Use the
 * format YYYYMM.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialPeriodInJournalTransactionUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialPeriodInJournalTransactionUpdateDtoFactory factory()
 */
class FinancialPeriodInJournalTransactionUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
