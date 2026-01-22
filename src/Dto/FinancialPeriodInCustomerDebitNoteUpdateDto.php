<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The financial period to which the transactions recorded in the document should be posted. Use the
 * format YYYYMM.
 */
class FinancialPeriodInCustomerDebitNoteUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
