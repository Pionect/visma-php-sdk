<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General information tab &gt; Financial settings section &gt; Supplier class* &gt;
 * The class of the supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierClassInSupplierDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierClassInSupplierDtoFactory factory()
 */
class SupplierClassInSupplierDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
