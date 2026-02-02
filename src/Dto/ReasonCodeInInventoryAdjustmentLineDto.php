<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Reason code &gt; The reason code associated with the transferred goods.
 *
 * @method static \Pionect\VismaSdk\Factories\ReasonCodeInInventoryAdjustmentLineDtoFactory testFactory()
 */
class ReasonCodeInInventoryAdjustmentLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
