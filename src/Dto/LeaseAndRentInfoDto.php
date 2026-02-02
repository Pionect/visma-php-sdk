<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LeaseAndRentInfoDtoFactory testFactory()
 */
class LeaseAndRentInfoDto extends SpatieData
{
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
