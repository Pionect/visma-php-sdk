<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General information tab &gt; Warehouse defaults section &gt; Default receipt to &gt; The location of
 * warehouse to be used by default to receive certain quantities of the specified stock item.
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultReceiptToInInventoryDtoFactory testFactory()
 */
class DefaultReceiptToInInventoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
