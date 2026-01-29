<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Owner &gt; The employee who is responsible for the purchase order.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OwnerInPurchaseOrderBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInPurchaseOrderBasicDtoFactory factory()
 */
class OwnerInPurchaseOrderBasicDto extends Model
{
    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?string $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
