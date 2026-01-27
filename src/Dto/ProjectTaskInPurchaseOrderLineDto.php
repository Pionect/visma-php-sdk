<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project task &gt; The project task with which this purchase order is associated.
 */
class ProjectTaskInPurchaseOrderLineDto extends Model
{
    /** The internal identifier. */
    #[Property]
    public ?int $internalId;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
