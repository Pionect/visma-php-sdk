<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Branch
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInCustomerBalanceV2dtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInCustomerBalanceV2dtoFactory testFactory()
 */
class BranchNumberInCustomerBalanceV2dto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
