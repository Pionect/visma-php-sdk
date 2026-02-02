<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Branch &gt; The branch of the company.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInGeneralLedgerTransactionDetailsDtoFactory testFactory()
 */
class BranchInGeneralLedgerTransactionDetailsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
