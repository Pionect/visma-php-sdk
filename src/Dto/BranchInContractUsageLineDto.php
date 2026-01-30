<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Both tabs &gt; Branch &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInContractUsageLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInContractUsageLineDtoFactory factory()
 */
class BranchInContractUsageLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
