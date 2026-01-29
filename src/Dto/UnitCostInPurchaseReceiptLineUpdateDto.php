<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The cost of a unit of the purchased item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UnitCostInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UnitCostInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class UnitCostInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
