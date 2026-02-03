<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Represents a collection of Purchase Order lines belonging to a specific Purchase Order.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderLinesUpdateDtoFactory testFactory()
 */
class PurchaseReceiptOrderLinesUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $orderNbr = null,
        /** @var PurchaseReceiptOrderLineNbrUpdateDto[]|null */
        public ?array $lines = null,
        /** @var AllocationsUpdateDto[]|null */
        public ?array $allocations = null,
    ) {}
}
