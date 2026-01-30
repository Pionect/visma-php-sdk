<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Document details tab &gt; Branch* &gt; The branch to which the document belongs.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInPurchaseReceiptBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInPurchaseReceiptBasicDtoFactory testFactory()
 */
class BranchNumberInPurchaseReceiptBasicDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
