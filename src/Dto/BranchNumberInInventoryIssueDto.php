<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Branch associated
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInInventoryIssueDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInInventoryIssueDtoFactory factory()
 */
class BranchNumberInInventoryIssueDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
