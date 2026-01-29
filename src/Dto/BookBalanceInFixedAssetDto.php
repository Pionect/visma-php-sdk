<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The book balance details for this fixed asset
 */
class BookBalanceInFixedAssetDto extends Model
{
    /** The acquisition cost of this fixed asset */
    #[Property]
    public ?float $acquisitionCost;

    /** The depreciation method id of this fixed asset */
    #[Property]
    public ?string $depreciationMethodId;

    /** The date this asset is placed in service */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $depreciationFromDate;

    /** The first period this fixed asset will start/has started depreciating */
    #[Property]
    public ?string $depreciationFromPeriod;

    /** The last period this fixed asset will depreciate/ was depreciated */
    #[Property]
    public ?string $depreciationToPeriod;

    /** The last period this asset has been depreciated */
    #[Property]
    public ?string $lastDepreciationPeriod;

    /** The salvage amount of this fixed asset */
    #[Property]
    public ?float $salvageAmount;

    /** The useful life of this fixed asset in years */
    #[Property]
    public ?float $usefulLife;

    #[Property]
    public ?bookInBookBalanceDto $book;
}
