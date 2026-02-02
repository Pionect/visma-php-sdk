<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Supplier* &gt; The supplier from which the items will be
 * purchased.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInPurchaseOrderDtoFactory testFactory()
 */
class SupplierInPurchaseOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
