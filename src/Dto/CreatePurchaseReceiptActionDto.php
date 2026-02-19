<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CreatePurchaseReceiptActionDtoFactory testFactory()
 */
class CreatePurchaseReceiptActionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandatory field */
        public ?string $orderType = null,
    ) {}
}
