<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreatePurchaseReceiptActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreatePurchaseReceiptActionDtoFactory factory()
 */
class CreatePurchaseReceiptActionDto extends Model
{
    public function __construct(
        public ?string $orderType = null,
    ) {}
}
