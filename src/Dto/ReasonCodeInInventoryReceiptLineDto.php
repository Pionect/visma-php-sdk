<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reason code &gt; The reason code associated with the transferred goods.
 */
class ReasonCodeInInventoryReceiptLineDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
