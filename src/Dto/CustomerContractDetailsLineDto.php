<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a CustomerContractDetailLine in CustomerContractController. Used for getting
 * data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractDetailsLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractDetailsLineDtoFactory factory()
 */
class CustomerContractDetailsLineDto extends Model
{
    #[Property]
    public ?int $contractDetailId;

    #[Property]
    public ?string $itemCode;

    #[Property]
    public ?string $description;

    #[Property]
    public ?float $included;

    #[Property]
    public ?float $difference;

    #[Property]
    public ?float $setupPrice;

    #[Property]
    public ?float $setupDiscount;

    #[Property]
    public ?float $recurringPrice;

    #[Property]
    public ?float $extraUsagePrice;

    #[Property]
    public ?float $recurringDiscount;

    #[Property]
    public ?float $renewalPrice;

    #[Property]
    public ?float $renewalDiscount;

    #[Property]
    public ?string $invoiceType;
}
