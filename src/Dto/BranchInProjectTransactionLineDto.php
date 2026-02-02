<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Branch &gt; The branch in which the transaction was created.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInProjectTransactionLineDtoFactory testFactory()
 */
class BranchInProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
