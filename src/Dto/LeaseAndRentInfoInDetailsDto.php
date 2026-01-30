<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * The lease and rent infor for this fixed asset
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LeaseAndRentInfoInDetailsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LeaseAndRentInfoInDetailsDtoFactory testFactory()
 */
class LeaseAndRentInfoInDetailsDto extends Model
{
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
