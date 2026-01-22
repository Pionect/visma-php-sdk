<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The project task with which the document is associated.
 */
class ProjectTaskIdInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
