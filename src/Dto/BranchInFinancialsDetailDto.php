<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Link to general ledger section &gt; Branch &gt; 	The branch that initiated the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInFinancialsDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInFinancialsDetailDtoFactory factory()
 */
class BranchInFinancialsDetailDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
