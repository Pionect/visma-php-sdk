<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Branch associated
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInInventoryReceiptDtoFactory testFactory()
 */
class BranchNumberInInventoryReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
