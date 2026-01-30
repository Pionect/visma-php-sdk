<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Supplier* &gt; The supplier from which the items have been
 * received or to which they will be returned.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInPurchaseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInPurchaseReceiptDtoFactory factory()
 */
class SupplierInPurchaseReceiptDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
