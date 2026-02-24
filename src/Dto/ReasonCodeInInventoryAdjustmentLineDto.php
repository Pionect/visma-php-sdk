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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ReasonCodeInInventoryAdjustmentLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
