<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Financial details tab &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialsDetailInCashTransactionDtoFactory testFactory()
 */
class FinancialsDetailInCashTransactionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $batchNumber = null,
        public ?BranchInFinancialsDetailDto $branch = null,
        public ?bool $cleared = null,
        public ?\Carbon\Carbon $clearDate = null,
        public ?TaxZoneInFinancialsDetailDto $taxZone = null,
        public ?string $taxCalcMode = null,
    ) {}
}
