<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Landed costs tab &gt; Supplier* &gt; The landed cost supplier to whom the landed
 * cost amount will be paid.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInLandedCostDtoFactory testFactory()
 */
class SupplierInLandedCostDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
