<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Location* &gt; Click the magnifier. The supplier location from
 * which the items will be received.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInPurchaseOrderBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInPurchaseOrderBasicDtoFactory factory()
 */
class LocationInPurchaseOrderBasicDto extends Model
{
    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?int $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
