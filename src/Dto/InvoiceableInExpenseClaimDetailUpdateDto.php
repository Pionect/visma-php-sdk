<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The currency of the expense receipt. However, if you enter a claim line directly, the currency value
 * is read-only and matching the claim currency.
 */
class InvoiceableInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
