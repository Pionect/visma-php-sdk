<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents the CustomerContractRecurringSummary in CustomerContractController. Used for
 * getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractRecurringSummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractRecurringSummaryDtoFactory testFactory()
 */
class CustomerContractRecurringSummaryDto extends Model
{
    public function __construct(
        public int|float|null $recurringTotal = null,
        public int|float|null $extraUsageTotal = null,
        public int|float|null $totalDue = null,
        public ?array $lines = null,
    ) {}
}
