<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a CustomerContractDetailLine in CustomerContractController. Used for getting
 * data.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractDetailsLineDtoFactory testFactory()
 */
class CustomerContractDetailsLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $contractDetailId = null,
        public ?string $itemCode = null,
        public ?string $description = null,
        public int|float|null $included = null,
        public int|float|null $difference = null,
        public int|float|null $setupPrice = null,
        public int|float|null $setupDiscount = null,
        public int|float|null $recurringPrice = null,
        public int|float|null $extraUsagePrice = null,
        public int|float|null $recurringDiscount = null,
        public int|float|null $renewalPrice = null,
        public int|float|null $renewalDiscount = null,
        public ?string $invoiceType = null,
    ) {}
}
