<?php

namespace Pionect\VismaSdk\Dto;

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
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
