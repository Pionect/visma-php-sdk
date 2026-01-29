<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Purchase Order reference number to add to a Purchase Receipt.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderUpdateDtoFactory factory()
 */
class PurchaseReceiptOrderUpdateDto extends Model
{
    /** The reference number of the Purchase Order. */
    #[Property]
    public ?string $orderNbr;

    #[Property]
    public ?string $orderType;

    #[Property]
    public ?array $allocations;
}
