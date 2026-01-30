<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Financial details tab &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialsDetailInCashTransactionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialsDetailInCashTransactionDtoFactory testFactory()
 */
class FinancialsDetailInCashTransactionDto extends Model
{
    public function __construct(
        public ?string $batchNumber = null,
        public ?BranchInFinancialsDetailDto $branch = null,
        public ?bool $cleared = null,
        public ?\Carbon\Carbon $clearDate = null,
        public ?TaxZoneInFinancialsDetailDto $taxZone = null,
        public ?string $taxCalcMode = null,
    ) {}
}
