<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DetailsDto extends Model
{
    /** Type can be */
    #[Property]
    public ?string $propertyType;

    /** Status can be */
    #[Property]
    public ?string $status;

    /** The date of the receipt */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $receiptDate;

    /** The date this asset is placed in service */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $depreciateFromDate;

    /** The acquisition cost of this fixed asset */
    #[Property]
    public ?float $acquisitionCost;

    /** The salvage amount of this fixed asset */
    #[Property]
    public ?float $salvageAmount;

    /** The date of the disposal of this fixed asset */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $disposalDate;

    /** The period of the disposal of this fixed asset */
    #[Property]
    public ?string $disposalPeriodId;

    /** The disposal method of this fixed asset */
    #[Property]
    public ?int $disposalMethodId;

    /** The disposal amount of this fixed asset */
    #[Property]
    public ?float $saleAmount;

    /** The bill number of the fixed asset invoice */
    #[Property]
    public ?string $billNumber;

    /** The serial number of this fixed asset */
    #[Property]
    public ?string $serialNumber;

    #[Property]
    public ?disposalMethodInDetailsDto $disposalMethod;

    #[Property]
    public ?leaseAndRentInfoInDetailsDto $leaseAndRentInfo;
}
