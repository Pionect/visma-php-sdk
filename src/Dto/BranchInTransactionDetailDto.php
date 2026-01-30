<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Branch &gt; The branch that created the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInTransactionDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInTransactionDetailDtoFactory testFactory()
 */
class BranchInTransactionDetailDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
