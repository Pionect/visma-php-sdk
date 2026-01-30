<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Write-off reason code &gt; A reason code that defines an account and subaccount to be used for
 * writing off credits or balances.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WriteOffReasonCodeInPaymentLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WriteOffReasonCodeInPaymentLineDtoFactory factory()
 */
class WriteOffReasonCodeInPaymentLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
