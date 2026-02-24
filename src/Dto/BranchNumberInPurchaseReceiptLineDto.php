<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Document details tab &gt; Branch* &gt; The branch for which the item is purchased.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInPurchaseReceiptLineDtoFactory testFactory()
 */
class BranchNumberInPurchaseReceiptLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\BranchNumberInPurchaseReceiptLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
