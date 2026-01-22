<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Ref. no &gt; Reference number for the document. Can be used when manual numbering
 * is enabled.
 */
class ReferenceNumberInPaymentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
