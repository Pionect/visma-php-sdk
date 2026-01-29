<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents the CustomerContractRecurringSummary in CustomerContractController. Used for
 * getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractRecurringSummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractRecurringSummaryDtoFactory factory()
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
