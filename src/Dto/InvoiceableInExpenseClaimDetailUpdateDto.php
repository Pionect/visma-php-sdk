<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The currency of the expense receipt. However, if you enter a claim line directly, the currency value
 * is read-only and matching the claim currency.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InvoiceableInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceableInExpenseClaimDetailUpdateDtoFactory testFactory()
 */
class InvoiceableInExpenseClaimDetailUpdateDto extends Model
{
    public function __construct(
        public ?bool $value = null,
    ) {}
}
