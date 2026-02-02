<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents the CustomerContractDetails in CustomerContractController. Used for getting
 * data.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractDetailsDtoFactory testFactory()
 */
class CustomerContractDetailsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
