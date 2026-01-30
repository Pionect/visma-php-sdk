<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Supplier* &gt; The supplier from which the items will be
 * purchased.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInPurchaseOrderDtoFactory factory()
 */
class SupplierInPurchaseOrderDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
