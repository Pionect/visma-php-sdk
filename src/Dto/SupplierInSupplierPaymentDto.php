<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Supplier* &gt; The supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInSupplierPaymentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInSupplierPaymentDtoFactory factory()
 */
class SupplierInSupplierPaymentDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
