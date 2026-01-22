<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents the CustomerContractRecurringSummary in CustomerContractController. Used for
 * getting data.
 */
class CustomerContractRecurringSummaryDto extends Model
{
    #[Property]
    public ?float $recurringTotal;

    #[Property]
    public ?float $extraUsageTotal;

    #[Property]
    public ?float $totalDue;

    #[Property]
    public ?array $lines;
}
