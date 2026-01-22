<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Represents a collection of Purchase Order lines belonging to a specific Purchase Order.
 */
class PurchaseReceiptOrderLinesUpdateDto extends Model
{
    /** The Purchase Order reference number. */
    #[Property]
    public ?string $orderNbr;

    /** Array of line numbers belonging to a Purchase Order. */
    #[Property]
    public ?array $lines;

    #[Property]
    public ?array $allocations;
}
