<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: General information tab &gt; Item defaults section &gt; VAT category* &gt; The VAT
 * code of the stock item, which by default is the VAT code associated with the item class.
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInInventoryDtoFactory testFactory()
 */
class VatCodeInInventoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
