<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Details tab &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DetailsInCustomerContractDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DetailsInCustomerContractDtoFactory factory()
 */
class DetailsInCustomerContractDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $effectiveFrom = null,
        public ?PromoCodeIdDescriptionDto $promoCode = null,
        public int|float|null $pendingSetup = null,
        public int|float|null $pendingRecurring = null,
        public int|float|null $pendingRenewal = null,
        public int|float|null $totalPending = null,
        public int|float|null $currentSetup = null,
        public int|float|null $currentRecurring = null,
        public int|float|null $currentRenewal = null,
        public ?array $lines = null,
    ) {}
}
