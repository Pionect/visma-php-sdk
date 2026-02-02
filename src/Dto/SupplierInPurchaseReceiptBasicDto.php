<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Supplier* &gt; The supplier from which the items have been
 * received or to which they will be returned.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInPurchaseReceiptBasicDtoFactory testFactory()
 */
class SupplierInPurchaseReceiptBasicDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
