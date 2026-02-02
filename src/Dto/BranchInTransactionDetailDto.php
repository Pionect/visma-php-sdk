<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Branch &gt; The branch that created the transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInTransactionDetailDtoFactory testFactory()
 */
class BranchInTransactionDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
