<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The project with which the document is associated.
 */
class ProjectIdInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
