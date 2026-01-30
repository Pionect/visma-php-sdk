<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General information tab &gt; Item defaults section &gt; VAT category* &gt; The VAT
 * code of the stock item, which by default is the VAT code associated with the item class.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCodeInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInInventoryDtoFactory testFactory()
 */
class VatCodeInInventoryDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
