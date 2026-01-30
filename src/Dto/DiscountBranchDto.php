<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountBranchDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountBranchDtoFactory factory()
 */
class DiscountBranchDto extends Model
{
    public function __construct(
        public ?string $branch = null,
    ) {}
}
