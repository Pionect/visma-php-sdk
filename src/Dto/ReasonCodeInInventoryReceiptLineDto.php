<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Reason code &gt; The reason code associated with the transferred goods.
 *
 * @method static \Pionect\VismaSdk\Factories\ReasonCodeInInventoryReceiptLineDtoFactory testFactory()
 */
class ReasonCodeInInventoryReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
