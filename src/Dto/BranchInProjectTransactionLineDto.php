<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Branch &gt; The branch in which the transaction was created.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInProjectTransactionLineDtoFactory factory()
 */
class BranchInProjectTransactionLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
