<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Hold &gt; A check box that indicates (if selected) that the document is a draft
 * with the On hold status.
 */
class HoldInPaymentUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
