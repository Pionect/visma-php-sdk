<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type DateTime - in UTC timezone
 */
class CustomDateTimeUtc1inPurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $value;
}
