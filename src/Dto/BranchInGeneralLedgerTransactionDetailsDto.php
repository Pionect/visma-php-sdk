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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\BranchInGeneralLedgerTransactionDetailsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
