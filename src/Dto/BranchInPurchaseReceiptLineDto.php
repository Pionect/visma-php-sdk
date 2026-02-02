<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Branch is deprecated, please use BranchNumber instead.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInPurchaseReceiptLineDtoFactory testFactory()
 */
class BranchInPurchaseReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
