<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type int
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomInt1inPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomInt1inPurchaseReceiptLineUpdateDtoFactory factory()
 */
class CustomInt1inPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
