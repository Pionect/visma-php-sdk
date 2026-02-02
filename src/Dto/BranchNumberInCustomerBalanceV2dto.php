<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Branch
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInCustomerBalanceV2dtoFactory testFactory()
 */
class BranchNumberInCustomerBalanceV2dto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
