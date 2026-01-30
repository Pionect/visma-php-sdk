<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a CustomerContractRecurringSummaryLine in CustomerContractController. Used for
 * getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractRecurringSummaryLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractRecurringSummaryLineDtoFactory testFactory()
 */
class CustomerContractRecurringSummaryLineDto extends Model
{
    public function __construct(
        public ?string $itemCode = null,
        public ?string $description = null,
        public ?string $itemId = null,
        public ?string $uom = null,
        public ?string $invoiceType = null,
        public int|float|null $included = null,
        public int|float|null $recurringPrice = null,
        public int|float|null $recurringDiscount = null,
        public int|float|null $extraUsagePrice = null,
        public int|float|null $unInvoiced = null,
        public int|float|null $usedTotal = null,
    ) {}
}
