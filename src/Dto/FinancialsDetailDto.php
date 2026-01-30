<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialsDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialsDetailDtoFactory factory()
 */
class FinancialsDetailDto extends Model
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
