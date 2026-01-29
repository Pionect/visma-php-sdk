<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Landed costs tab &gt; Supplier* &gt; The landed cost supplier to whom the landed
 * cost amount will be paid.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInLandedCostDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInLandedCostDtoFactory factory()
 */
class SupplierInLandedCostDto extends Model
{
    #[Property]
    public ?int $internalId;

    /** The identifier of the particular destination of the selected type. */
    #[Property]
    public ?string $number;

    /** The name of the particular destination of the selected type. */
    #[Property]
    public ?string $name;
}
