<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents the CustomerContractRecurringSummary in CustomerContractController. Used for
 * getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractRecurringSummaryDtoFactory testFactory()
 */
class CustomerContractRecurringSummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public int|float|null $recurringTotal = null,
        public int|float|null $extraUsageTotal = null,
        public int|float|null $totalDue = null,
        public ?array $lines = null,
    ) {}
}
