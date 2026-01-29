<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a CustomerContractRecurringSummaryLine in CustomerContractController. Used for
 * getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractRecurringSummaryLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractRecurringSummaryLineDtoFactory factory()
 */
class CustomerContractRecurringSummaryLineDto extends Model
{
    #[Property]
    public ?string $itemCode;

    #[Property]
    public ?string $description;

    #[Property]
    public ?string $itemId;

    #[Property]
    public ?string $uom;

    #[Property]
    public ?string $invoiceType;

    #[Property]
    public ?float $included;

    #[Property]
    public ?float $recurringPrice;

    #[Property]
    public ?float $recurringDiscount;

    #[Property]
    public ?float $extraUsagePrice;

    #[Property]
    public ?float $unInvoiced;

    #[Property]
    public ?float $usedTotal;
}
