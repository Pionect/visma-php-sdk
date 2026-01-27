<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Write-off reason code &gt; A reason code that defines an account and subaccount to be used for
 * writing off credits or balances.
 */
class WriteOffReasonCodeInPaymentLineDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
