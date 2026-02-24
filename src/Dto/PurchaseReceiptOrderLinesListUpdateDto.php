<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a collection of Purchase Orders reference numbers and associated line numbers.
 * Used to add Purchase Order lines to a Purchase Receipt.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderLinesListUpdateDtoFactory testFactory()
 */
class PurchaseReceiptOrderLinesListUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PurchaseReceiptOrderLinesListUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * @var PurchaseReceiptOrderLinesUpdateDto[]|null
         *                                                The collection of Purchase Order reference numbers and their lines.
         */
        public ?array $purchaseOrderLines = null,
    ) {}
}
