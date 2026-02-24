<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\DetailsPropertyTypeEnum;
use Pionect\VismaSdk\Enums\DetailsStatusEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DetailsDtoFactory testFactory()
 */
class DetailsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DetailsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Type can be */
        public ?DetailsPropertyTypeEnum $propertyType = null,
        /** Status can be */
        public ?DetailsStatusEnum $status = null,
        /** The date of the receipt */
        public ?\Carbon\Carbon $receiptDate = null,
        /** The date this asset is placed in service */
        public ?\Carbon\Carbon $depreciateFromDate = null,
        /** The acquisition cost of this fixed asset */
        public int|float|null $acquisitionCost = null,
        /** The salvage amount of this fixed asset */
        public int|float|null $salvageAmount = null,
        /** The date of the disposal of this fixed asset */
        public ?\Carbon\Carbon $disposalDate = null,
        /** The period of the disposal of this fixed asset */
        #[MapName('disposalPeriodID')]
        public ?string $disposalPeriodId = null,
        /** The disposal method of this fixed asset */
        #[MapName('disposalMethodID')]
        public ?int $disposalMethodId = null,
        /** The disposal amount of this fixed asset */
        public int|float|null $saleAmount = null,
        /** The bill number of the fixed asset invoice */
        public ?string $billNumber = null,
        /** The serial number of this fixed asset */
        public ?string $serialNumber = null,
        public ?DisposalMethodInDetailsDto $disposalMethod = null,
        public ?LeaseAndRentInfoInDetailsDto $leaseAndRentInfo = null,
    ) {}
}
