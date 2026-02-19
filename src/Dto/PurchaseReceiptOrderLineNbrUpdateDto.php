<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Represents a Purchase Order line number to add to a Purchase Receipt.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderLineNbrUpdateDtoFactory testFactory()
 */
class PurchaseReceiptOrderLineNbrUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The line number of the Purchase Order line. */
        public ?string $lineNbr = null,
    ) {}
}
