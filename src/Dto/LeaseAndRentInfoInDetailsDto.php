<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * The lease and rent infor for this fixed asset
 *
 * @method static \Pionect\VismaSdk\Factories\LeaseAndRentInfoInDetailsDtoFactory testFactory()
 */
class LeaseAndRentInfoInDetailsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\LeaseAndRentInfoInDetailsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('lessorID')]
        public ?string $lessorId = null,
        public ?string $lessorName = null,
        public ?int $leaseRentTerm = null,
        public ?string $leaseNumber = null,
        public int|float|null $rentAmount = null,
        public int|float|null $retailCost = null,
        public ?string $manufacturingYear = null,
    ) {}
}
