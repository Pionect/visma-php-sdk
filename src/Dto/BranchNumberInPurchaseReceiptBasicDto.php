<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Document details tab &gt; Branch* &gt; The branch to which the document belongs.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInPurchaseReceiptBasicDtoFactory testFactory()
 */
class BranchNumberInPurchaseReceiptBasicDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
