<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Branch associated
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInInventoryIssueUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInInventoryIssueUpdateDtoFactory factory()
 */
class BranchNumberInInventoryIssueUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
