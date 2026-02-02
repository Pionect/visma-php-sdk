<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * The details of this fixed asset
 *
 * @method static \Pionect\VismaSdk\Factories\DetailsInFixedAssetDtoFactory testFactory()
 */
class DetailsInFixedAssetDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $propertyType = null,
        public ?string $status = null,
        public ?\Carbon\Carbon $receiptDate = null,
        public ?\Carbon\Carbon $depreciateFromDate = null,
        public int|float|null $acquisitionCost = null,
        public int|float|null $salvageAmount = null,
        public ?\Carbon\Carbon $disposalDate = null,
        #[MapName('disposalPeriodID')]
        public ?string $disposalPeriodId = null,
        #[MapName('disposalMethodID')]
        public ?int $disposalMethodId = null,
        public int|float|null $saleAmount = null,
        public ?string $billNumber = null,
        public ?string $serialNumber = null,
        public ?DisposalMethodInDetailsDto $disposalMethod = null,
        public ?LeaseAndRentInfoInDetailsDto $leaseAndRentInfo = null,
    ) {}
}
