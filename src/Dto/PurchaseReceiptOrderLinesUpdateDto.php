<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Represents a collection of Purchase Order lines belonging to a specific Purchase Order.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptOrderLinesUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderLinesUpdateDtoFactory factory()
 */
class PurchaseReceiptOrderLinesUpdateDto extends Model
{
    public function __construct(
        public ?string $orderNbr = null,
        public ?array $lines = null,
        public ?array $allocations = null,
    ) {}
}
