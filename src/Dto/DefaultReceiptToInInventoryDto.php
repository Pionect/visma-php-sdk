<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Warehouse defaults section &gt; Default receipt to &gt; The location of
 * warehouse to be used by default to receive certain quantities of the specified stock item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultReceiptToInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultReceiptToInInventoryDtoFactory factory()
 */
class DefaultReceiptToInInventoryDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
