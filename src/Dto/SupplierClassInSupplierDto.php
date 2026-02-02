<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: General information tab &gt; Financial settings section &gt; Supplier class* &gt;
 * The class of the supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierClassInSupplierDtoFactory testFactory()
 */
class SupplierClassInSupplierDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
