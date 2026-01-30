<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents the CustomerContractDetails in CustomerContractController. Used for getting
 * data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractDetailsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractDetailsDtoFactory factory()
 */
class CustomerContractDetailsDto extends Model
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
